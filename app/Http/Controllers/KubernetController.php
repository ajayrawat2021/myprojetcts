<?php

namespace App\Http\Controllers;

use App\Models\Kubernet;
use Illuminate\Http\Request;

class KubernetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/add_kubernet_content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'heading'=>'required',
        ]);
        $Kubernet = new Kubernet;
        $Kubernet->heading = $request->heading;
        $Kubernet->content = $request->message;
        $Kubernet->save();
        $request->session()->flash('msg','Added Successfully !');
        return redirect('/add-kubernet-content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showkubernetlist()
    {
        $kubernets = Kubernet::all();
        return view('admin/list_kubernet_content',compact('kubernets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kubernet  $kubernet
     * @return \Illuminate\Http\Response
     */
    public function deleteKubernet($id)
    {

        Kubernet::select('*')->where('id',$id)->delete();
        return redirect('/show-kubernet-list');

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kubernet  $kubernet
     * @return \Illuminate\Http\Response
     */
    public function edit(Kubernet $kubernet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kubernet  $kubernet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kubernet $kubernet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kubernet  $kubernet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kubernet $kubernet)
    {
        //
    }
}
