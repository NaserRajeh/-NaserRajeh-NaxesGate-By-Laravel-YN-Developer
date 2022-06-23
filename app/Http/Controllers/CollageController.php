<?php

namespace App\Http\Controllers;

use App\Models\Collage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;

class CollageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Collage=Collage::orderby('created_at','DESC')->get();
        return view('college.index')->with([
        'Collage'=>$Collage
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
        return view('college.create');
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

            Collage::create([
                'co_code'       =>$request->co_code,
                'co_name'       => $request->co_name,
            ]);
            DB::commit();
            return redirect()->route('Collage.index')->with('success','تمت عملية إضافة جامعة بنجاح');
        } catch (\Exception $e) {
            // DB::rollback();
            return $e->getMessage();
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Collage $Collage)
    {
        //
        $Collage= Collage::findorfail($Collage->co_id);
        return view('college.show')->with([
            'Collage'    => $Collage ,
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collage $Collage)
    {
        //
        $Collage= Collage::findorfail($Collage->co_id);
        return view('college.edit')->with([
            'Collage'    => $Collage ,
         ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Collage $Collage)
    {
        //
        try {
            DB::beginTransaction();

            $Collage->update([
                'co_name' =>$request->co_name
            ]);
            DB::commit();
            return redirect()->route('Collage.show',$Collage)->with('success','تمت عملية التعديل بنجاح');
        } catch (\Exception $e) {
            // DB::rollback();
            return $e->getMessage();
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
