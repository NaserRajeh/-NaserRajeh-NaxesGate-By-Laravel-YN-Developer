<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{

    public function index()
    {
        $users=User::orderby('created_at','DESC')->get();
        return view('user.index')->with([
        'users'=>$users
        ]);
    }


    public function create()
    {
        return view('user.create');
    }


    public function store(StoreUserRequest $request)
    {
            try {
                DB::beginTransaction();

                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);
                DB::commit();
                return redirect()->route('User.index')->with('success','تمت عملية إضافة مستخدم بنجاح');
            } catch (\Exception $e) {
                DB::rollback();
            // return $e->getMessage();
                return back();
            }
    }

  
    public function show($id)
    {
        $user = User::findorfail($id);
        return view('user.show')->with([
            'user'=>$user
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
