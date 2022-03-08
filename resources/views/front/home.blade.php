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
<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
      <div class="container">

        <div class="section-title mt-5">
          <h2>Docker's Questions</h2>
          <hr>

        </div>

        <div class="row  d-flex align-items-stretch" id="about">
        @foreach($docker as $data)
          <div class="col-lg-6 faq-item docket-content">
            <i class="bx bx-help-circle" style="color: red;"></i>
            <a href="details/{{$data->id}}"><h4>{{$data->heading}}</h4></a>
            <a href="details/{{$data->id}}"><p>{!! substr($data->content,0,300) !!}</p></a>
          </div>
          @endforeach
        </div>
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
            <a href="/docker"><button type="button" class="btn btn-danger pull-right">View More</button></a>

            </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


    <!-- ************************* for elastic search ******** -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title mt-2">
          <h2>Elastic Search Questions</h2>
          <hr>
        </div>
        <div class="row  d-flex align-items-stretch" id="about">
        @foreach($elastic as $data)
          <div class="col-lg-6 faq-item docket-content">
            <i class="bx bx-help-circle" style="color: red;"></i>
            <a href="elastic-details/{{$data->id}}"><h4>{{$data->heading}}</h4></a>
            <a href="elastic-details/{{$data->id}}"><p>{!! substr($data->content,0,300) !!}</p></a>
          </div>
          @endforeach
        </div>
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
            <a href="/elastic"><button type="button" class="btn btn-danger">View More</button></a>

            </div>
        </div>

      </div>
    </section>
@endsection