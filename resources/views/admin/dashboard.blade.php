@extends('admin/newdash')
@extends('admin/sidenav')
@extends('admin/header')
@section('title','Dashboard')

@section('home')
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

<div class="container">
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <h5 class="card-title"></h5>
              <div class="card">
                <div class="">
                  <div class="row">
                    <div class="col-lg-3 border-right pe-0">
                      <div class="card-body border-bottom">
                        <h4 class="card-title mt-2">Drag & Drop Event</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div id="calendar-events" class="">
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-info"
                              >
                                <i class="fa fa-circle text-info me-2"></i>Event
                                One
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-success"
                              >
                                <i class="fa fa-circle text-success me-2"></i>
                                Event Two
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-danger"
                              >
                                <i class="fa fa-circle text-danger me-2"></i
                                >Event Three
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-warning"
                              >
                                <i class="fa fa-circle text-warning me-2"></i
                                >Event Four
                              </div>
                            </div>
                            <!-- checkbox -->
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="drop-remove"
                              />
                              <label class="form-check-label" for="drop-remove"
                                >Remove after drop</label
                              >
                            </div>
                            <a
                              href="javascript:void(0)"
                              data-toggle="modal"
                              data-target="#add-new-event"
                              class="
                                d-flex
                                align-items-center
                                justify-content-center
                                btn
                                mt-3
                                btn-info
                                d-block
                                waves-effect waves-light
                              "
                            >
                              <i class="mdi mdi-plus fs-4 me-1"></i> Add New
                              Event
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-body b-l calender-sidebar">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         

        </div>

@endsection