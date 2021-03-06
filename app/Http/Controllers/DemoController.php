<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
use App\Models\Elastic;
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

    //********************* function for elastic serach */

    public function viewelastic()
    {
        return view('admin/add_elastic_content');
    }

    public function addelastic(Request $request){
        $request->validate([
            'heading'=>'required',
        ]);
        $Elastic = new Elastic;
        $Elastic->heading = $request->heading;
        $Elastic->content = $request->message;
        $Elastic->save();
        $request->session()->flash('msg','Added Successfully !');
        return redirect('/add-elasticsearch-content');
    }

    public function showelasticlist(){
        $elastic = Elastic::all();
        return view('admin/list_elastic_content',compact('elastic'));
    }

    public function deleteelastic($id){

        Elastic::select('*')->where('id',$id)->delete();
        return redirect('/show-elasticsearch-list');

    }
}
