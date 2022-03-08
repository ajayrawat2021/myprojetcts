@extends('front/layout')
@extends('front/header')

@section('maincontent')
<div class="card container mt-3">
  <div class="card-body">
    <a class="card-link" href="/">Home</a>
    <a class="card-link" href="" style="color: blue;">Elastic Search</a>
  </div>
</div>
<div class="container mt-5">
    <div class="row">
        @foreach($dockerDetails as $data)
        <div class="col-sm-12">
            <h2><center>{{$data->heading}}</center></h2>
            <p>{!! $data->content !!}</p><br><br><br><br>
        </div>
        @endforeach
    </div>
</div>
@endsection