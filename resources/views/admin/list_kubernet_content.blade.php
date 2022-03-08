@extends('admin/newdash')
@extends('admin/sidenav')
@extends('admin/header')
@section('title','Kubernet List')
@section('kubernets','actives')

<style>
  .actives{
    background-color: #27a9e3;
    color:white;
  }
</style>
@section('home')
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Kubernet Content List</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Kubernet
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
                <div class="card-body">
                <h4 class="card-title"><a href="/add-kubernet-content"><button type="button" class="btn btn-primary">
                        Add
                      </button></a>
                    </h4>
                      
                  <div class="table-responsive mt-3">
                    <table id="zero_config" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Heading</th>
                          <th>Content</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($kubernets as $data)
                        <tr>
                          <td>{{$data->heading}}</td>
                          <td>{!! $data->content !!} </td>
                          <td><a href="/delete-kubernet/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



@endsection