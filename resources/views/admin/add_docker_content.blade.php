@extends('admin/newdash')
@extends('admin/sidenav')
@extends('admin/header')
@section('title','Docker')

@section('home')

<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Add Docker</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Add
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

            <div class="card">
                <form class="form-horizontal" action="/addDocker" method="post">
                    @csrf
                  <div class="card-body">
                    
                    <h4 class="card-title"><a href="/show-docker-list"><button type="button" class="btn btn-primary">
                        Show List
                      </button></a></h4>
                     <h4 style="color:green;"> {{session('msg')}}</h4>

                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label">Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="heading" id="fname" placeholder="Heading Here" />
                        <span style="color: red;">@error('heading'){{$message}}@enderror</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                      <div class="col-sm-9">
                        <textarea  name="message" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body text-center">
                      <button type="button " class="btn btn-primary">
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
              </div>


              <script>
                        CKEDITOR.replace( 'message' );
                </script>
@endsection