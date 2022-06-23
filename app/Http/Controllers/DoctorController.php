<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

class DoctorController extends Controller
{
  
    public function index()
    {
        $doctors=Doctor::orderby('created_at','DESC')->get();
        return view('doctor.index')->with([
        'doctors'=>$doctors
        ]);
    }

    public function create()
    {
        return view('doctor.create');
    }

   
    public function store(StoreDoctorRequest $request)
    {
        try {
            DB::beginTransaction();

            Doctor::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'place_of_living' => $request->place_of_living,
                'phone' => $request->phone,
            ]);
            DB::commit();
            return redirect()->route('Doctor.index')->with('success','تمت عملية إضافة بيانات عضو هيئة التدريس بنجاح');
        } catch (\Exception $e) {
          DB::rollback();
         //return $e->getMessage();
            return back();
        }
    }

    
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
