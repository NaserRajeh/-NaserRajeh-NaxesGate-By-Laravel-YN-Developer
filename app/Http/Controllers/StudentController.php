<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\AcademicYear;
use App\Models\Nationality;
use App\Models\Collage;
use App\Models\Specialization;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
  
    public function index()
    {
       try {     
        $students=Student::with('AcademicYear','Specialization','Collage')->orderby('created_at','DESC')->where('stat','=',0)->get();
        return view('student.index')->with([
        'students'=>$students
        ]);
       } catch (\Exception $e) {
           return $e->getMessage();
       }
    }

    
    public function create()
    {
        $nationality=Nationality::all();
        $Specialization=Specialization::all();
        $Collage=Collage::all();
        $academic_year=AcademicYear::all();
        return view('student.create')->with([
           'nationality'      => $nationality ,
           'academic_year'    => $academic_year ,
           'Specialization'    => $Specialization ,
           'Collage'           => $Collage ,
        ]);
    }

    
    public function store(StoreStudentRequest $request)
    {
        try {
            DB::beginTransaction();

            Student::create([
                'name' => $request->name,
                'nationality_id' => $request->nationality_id,
                'co_id' => $request->co_id,
                'sp_id' => $request->sp_id,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'mother_name' => $request->mother_name,
                'place_of_living' => $request->place_of_living,
                'email' => $request->email,
                'phone' => $request->phone,
                'recipe' => $request->recipe,
                'academic_year_id' => $request->academic_year_id,
                'date_of_registration' => $request->date_of_registration,
                'note' => $request->note,
                'stat' => 0,
            ]);
            DB::commit();
            return redirect()->route('Student.index')->with('success','تمت عملية إضافة بيانات الطالب بنجاح');
        } catch (\Exception $e) {
            // DB::rollback();
            return $e->getMessage();
            return back();
        }
    }

    public function show(Student $Student)
    {
        $student=Student::with('AcademicYear','Nationality','Collage','Specialization')->findorfail($Student->id);
        return view('student.show')->with([
            'student'    => $student ,
         ]);
    }

    
    public function edit(Student $Student)
    {
        $nationality=Nationality::all();
        $academic_year=AcademicYear::all();
        $Specialization=Specialization::all();
        $Collage=Collage::all();
        $student=Student::findorfail($Student->id);
        return view('student.edit')->with([
           'nationality'      => $nationality ,
           'Specialization'   => $Specialization ,
           'Collage'          => $Collage ,
           'academic_year'    => $academic_year ,
           'student'          => $student ,
        ]);
    }

    
    public function update(UpdateStudentRequest $request, Student $Student)
    {
        try {
            DB::beginTransaction();

            $Student->update([
                'name' => $request->name,
                'co_id' => $request->co_id,
                'sp_id' => $request->sp_id,
                'nationality_id' => $request->nationality_id,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'mother_name' => $request->mother_name,
                'place_of_living' => $request->place_of_living,
                'email' => $request->email,
                'phone' => $request->phone,
                'recipe' => $request->recipe,
                'academic_year_id' => $request->academic_year_id,
                'date_of_registration' => $request->date_of_registration,
                'note' => $request->note,
                'stat' => 0,
            ]);
            DB::commit();
            return redirect()->route('Student.show',$Student)->with('success','تم حفظ بيانات الطالب بنجاح');
        } catch (\Exception $e) {
            DB::rollback();
        // return $e->getMessage();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
