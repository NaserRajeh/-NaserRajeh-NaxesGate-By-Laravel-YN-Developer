<?php

namespace App\Http\Controllers;

use App\Models\Unversity;
use App\Models\Collage;
use App\Models\CollegeUniversity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;



class UnversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Unversity=Unversity::orderby('created_at','DESC')->get();
        return view('unversity.index')->with([
        'Unversity'=>$Unversity
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('unversity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();

            Unversity::create([
                'un_name'       => $request->un_name,
                'un_email'      => $request->un_email,
                'un_phone'      => $request->un_phone,
                'un_address'    => $request->un_address,
                'un_web'        => $request->un_web,
                'un_sys'        => $request->un_sys,
                'un_branchs'    => $request->un_branchs,
                'un_code'       => $request->un_code,   
            ]);
            DB::commit();
            return redirect()->route('Unversity.create')->with('success','تمت عملية إضافة بيانات الجامعة بنجاح');
        } catch (\Exception $e) {
            DB::rollback();
            // return $e->getMessage();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Unversity $Unversity)
    {
        //
        $Unversity= Unversity::findorfail($Unversity->un_id);
        return view('unversity.show')->with([
            'Unversity'    => $Unversity ,
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unversity $Unversity)
    {
        //
        $Unversity=Unversity::findorfail($Unversity->un_id);
        return view('unversity.edit')->with([
           'Unversity'    => $Unversity ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Unversity $Unversity)
    {
        //
        try {
            DB::beginTransaction();

            $Unversity->update([
                'un_name'       => $request->un_name,
                'un_email'      => $request->un_email,
                'un_phone'      => $request->un_phone,
                'un_address'    => $request->un_address,
                'un_web'        => $request->un_web,
                'un_sys'        => $request->un_sys,
                'un_branchs'    => $request->un_branchs,
                'un_code'       => $request->un_code,
            ]);
            DB::commit();
            return redirect()->route('Unversity.show',$Unversity)->with('success','تمت عملية التعديل بنجاح');
        } catch (\Exception $e) {
            DB::rollback();
            //return $e->getMessage();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($un_id)
    {    
        $Unversity = Unversity::findorfail($un_id);
        $Unversity->delete();
        return redirect()->route('Unversity.index',$Unversity)->with('success','تمت العملية');

    }

    public function getUniversityCollage()
    {
        //

    }
}
