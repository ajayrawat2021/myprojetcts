<?php

namespace App\Http\Controllers;

use App\Models\Admin_login;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/admin_login');
    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');
        
        $result = Admin_login::where(['username'=>$username,'password'=>$password])->get();
        if(isset($result['0']->id)){

            $request->session()->put('username',$result['0']->username);
            return redirect('/dashboard');

        }
        else{
            $request->session()->flash('error','Incorrect Username & password');
            return redirect('/');

        }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin_login  $admin_login
     * @return \Illuminate\Http\Response
     */
    public function show(Admin_login $admin_login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin_login  $admin_login
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin_login $admin_login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin_login  $admin_login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin_login $admin_login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin_login  $admin_login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin_login $admin_login)
    {
        //
    }
}
