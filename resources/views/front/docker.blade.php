@extends('front/layout')
@extends('front/header')

@section('maincontent')

<style>
    .docket-content a{
        color: black;
      
    }
    .docket-content a:hover{
        color: blue;
      
    }

</style>
<div class="card container mt-3">
  <div class="card-body">
    <a class="card-link" href="/">Home</a>
    <a class="card-link" href="" style="color: blue;">Another link</a>
  </div>
</div>
<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
      <div class="container">

        <div class="section-title mt-5">
          <h2>Docker's Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch" id="about">
        @foreach($docker as $data)
          <div class="col-lg-6 faq-item docket-content">
            <i class="bx bx-help-circle" style="color: red;"></i>
            <a href="details/{{$data->id}}"><h4>{{$data->heading}}</h4></a>
            <a href=""><p>{!! substr($data->content,0,200) !!}</p></a>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection