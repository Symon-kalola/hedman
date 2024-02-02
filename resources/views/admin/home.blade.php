
@extends('layouts.admin')
@section('content')

<div class="mb-1 d-flex justify-content-between text-bs-secondary bg-white border shadow-sm p-2">
     <div class="h6 m-0"><i style="font-size:16px"class="fa fa-home text-orange me-2"></i>Home</div>
</div> 

<div class="row mt-2 g-2">
     <h5>Quick Stats</h5>
    <div class="col-md-4 ">
        <div class="border-start-orange  bg-white  shadow-sm text-center p-4 ">
              <div class=" d-flex align-items-center justify-content-between">
                   <div class="">
                       <h4 class="fw-bold text-blue">{{ $activities->count() }}</h4>
                       <div style="font-size:14px" class="fw-bold text-orange">ACTIVITIES</div>
                   </div>
                  <div class="text-end">
                    <i style="font-size:30px" class="fa fa-building text-primary"></i>
                  </div>
              </div>
             
        </div>
    </div>
    <div class="col-md-4">
        <div class="border-start-orange bg-white  shadow-sm text-center p-4 ">
        <div class=" d-flex align-items-center justify-content-between">
                   <div class="">
                      <h4 class="fw-bold text-blue">{{ $innovations->count() }}</h4>
                      <div style="font-size:14px" class="fw-bold text-orange">INNOVATIONS</div>
                   </div>
                  <div class="text-end">
                    <i style="font-size:30px" class="fa fa-rocket text-primary"></i>
                  </div>
              </div>
             
        </div>
    </div>
    <div class="col-md-4">
        <div class="border-start-orange bg-white  shadow-sm text-center p-4 ">
        <div class=" d-flex align-items-center justify-content-between">
                   <div class="">
                      <h4 class="fw-bold text-blue">0</h4>
                      <div style="font-size:14px" class="fw-bold text-orange">PARTNERSHIP REQUESTS</div>
                   </div>
                  <div class="text-end">
                    <i style="font-size:30px" class="fa fa-paper-plane text-primary"></i>
                  </div>
              </div>
             
        </div>
        </div>
    </div>
</div>

<div class="row mt-2 g-2">
<h5>System Activity Graphs</h5>
    <div class="col-md-6">
        <div id="container"></div>
    </div>
    <div class="col-md-6">
        <div id="container2"></div>
    </div>

</div>






 
@endsection 
