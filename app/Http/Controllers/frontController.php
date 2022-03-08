<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elastic;
use App\Models\Demo;

class frontController extends Controller
{
    //function for home page
    public function viewfront(){
        $docker = Demo::select('*')->limit(6)->get();
        $elastic = Elastic::select('*')->limit(4)->get();
        return view('front/home',compact('docker','elastic'));
    }
    public function dockerDetails($id){

      $dockerDetails = Demo::select('*')->where('id',$id)->get();
      return view('front/docker-details',compact('dockerDetails'));

    }
    //*** fornt page of docker */

    public function viewDocker(){
        $docker = Demo::all();
        return view('front/docker',compact('docker'));
    }

    public function viewelastic()
    {
        $elasticsearch = Elastic::all();
        return view('front/elastic',compact('elasticsearch'));
    }
    public function elasticDetails($id){

        $dockerDetails = Elastic::select('*')->where('id',$id)->get();
        return view('front/elastic-details',compact('dockerDetails'));

    }
}
