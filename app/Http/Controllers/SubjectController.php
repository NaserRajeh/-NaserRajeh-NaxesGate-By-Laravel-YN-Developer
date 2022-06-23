<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\AcademicYear;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{   
    public function index()
    {
        $subjects=Subject::with('AcademicYear')->orderby('created_at','DESC')->get();
        return view('subject.index')->with([
        'subjects'=>$subjects
        ]);
    }

   
    public function create()
    {
        $academic_year=AcademicYear::all();
        return view('subject.create')->with([
           'academic_year'    => $academic_year ,
        ]);
    }

    public function store(StoreSubjectRequest $request)
    {
        try {
            DB::beginTransaction();

            Subject::create([
                'name' => $request->name,
                'academic_year_id' => $request->academic_year_id,
                'year_works' => $request->year_works,
                'final' => $request->final,
                'end_degree' => $request->year_works+$request->final,
                'stat' =>0,
            ]);

            $sep_subs =[
                
            ];
            DB::commit();
            return redirect()->route('Subject.index')->with('success','تمت عملية إضافة بيانات المادة بنجاح');
        } catch (\Exception $e) {
           DB::rollback();
         // return $e->getMessage();
            return back();
        }
    }

    
    public function show(Subject $Subject)
    {
        $subject=subject::with('AcademicYear')->findorfail($Subject->id);
        return view('subject.show')->with([
            'subject'    => $subject ,
         ]);
    }

    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubjectRequest  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
