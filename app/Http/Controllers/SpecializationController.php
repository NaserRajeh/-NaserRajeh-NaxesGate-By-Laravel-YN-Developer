<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Specialization = Specialization::Orderby('created_at','DESC')->get();
        return view('specialization.index')->with([
        'Specialization' => $Specialization,
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
        return view('specialization.create');
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
        try{
            DB::beginTransaction();

            Specialization::create([
                'sp_name' => $request->sp_name,
        ]);
        DB::commit();
        return redirect()->route('specialization.index')->with('success','تمت عملية اضافة تخصص');
        } catch(\Exception $e){
            // DB::rollback();
            return $e->getMessage();
            return bakc();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Specialization $Specialization)
    {
        //
        $Specialization = Specialization::findorfail($Specialization->sp_id);
        return view('specialization.show')->with([
            'Specialization' => $Specialization,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialization $Specialization)
    {
        //
        $Specialization = Specialization::findorfail($Specialization->sp_id);
        return view('specialization.edit')->with([
            'Specialization' => $Specialization,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Specialization $Specialization)
    {
        //
        try {
            DB::beginTransaction();
            $Specialization->update([
                'sp_name' =>$request->sp_name
            ]);
            DB::commit();
            return redirect()->route('specialization.index',$Specialization)->with('success','تمت عملية اضافة تخصص');
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
    public function destroy($id)
    {
        //
    }
}
