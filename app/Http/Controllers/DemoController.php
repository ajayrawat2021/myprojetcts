<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
class DemoController extends Controller
{


    public function index()
    {
      //$user = Demo::all();
        return view('admin/dashboard');
    }

    //Function for login


    public function viewDocker()
    {
        return view('admin/add_docker_content');

    }

    public function addDocker(Request $request)
    {
       $request->validate([
           'heading'=>'required',
       ]);
       $demo = new Demo;
       $demo->heading = $request->heading;
       $demo->content = $request->message;
       $demo->save();
       $request->session()->flash('msg','Added Successfully !');
       return redirect('/add-docker-content');

        
    }
       ////******************8 function for shoe view docker list */
    public function showDockerlist()
    {
        $docker = Demo::all();
        return view('admin/list_docker_content',compact('docker'));
    }

     
    public function delete(Request $request,$id)
    {
         Demo::select('*')->where('id',$id)->delete();
        return redirect('/show-docker-list');

        
    }
}
