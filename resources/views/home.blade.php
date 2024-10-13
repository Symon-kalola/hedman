@extends('layouts.app')


<script src="/js/anim.js"></script>
@section('content')
    <div style="margin-top: -20px;" class="container-fluid shadow-lg ">
        <!-- -coursel starts from here -->
        <div id="carouselExampleControls" class="carousel slide  " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item bg-white carousel-img carousel-img active"
                    style=" background-image: url('/images/mani.jpg'); 
            background-size: cover; background-color:green; ">
                    <div id="banner">
                        <div id="banner-top" class="d-flex justify-content-center h-100  align-items-center">
                            <div>
                                <div class="text-center" data-scrollreveal="enter top over 0.8s after 0.5s">
                                    <h1 class="text-white" id="banner-heading">HEDMAN NURSARIES </h1>
                                    <h4 class="text-white" id="banner-subheading">We Sell,Transport,Plant hybrid Pine &
                                        BlueGum seedlings</h4>
                                </div>
                                <div class="d-flex justify-content-center mt-4"
                                    data-scrollreveal="enter bottom over 1.5s after 0.1s">
                                    {{-- <a class="btn btn-lg text-white border border-success " > Make your order now </a> --}}
                                    <a class="btn btn-lg text-white border border-success " href="/orders"> Make your order
                                        now </a>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item bg-white carousel-img"
                    style=" background-image: url('/images/pym.jpeg'); 
            background-size: cover;">
                    {{-- inner containner starts here --}}
                    <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
                        <div class="row row-cols-1 row-cols-md-3 g-4 text-center my-auto ">
                            <div class="col  ">
                                <div class="card  ">
                                    <i class="bi fa fa-tree"></i>
                                    <div class="card-body" style="margin-top: -50px;">
                                        <h5 class="card-title text-success">Our Sedlings</h5>
                                        <p class="card-text ">We sell hybrid Pine & Bluegum seeds as well at a cheeper cost
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="card mt-4 mt-md-0  ">
                                    <i class="bi fa fa-car-side"></i>
                                    <div class="card-body" style="margin-top: -50px;">
                                        <h5 class="card-title text-success">Free Sending or Delivery</h5>
                                        <p class="card-text">We deliver the seedlings at MK0 transport cost country wide
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="card mt-4 mt-md-0  ">
                                    <i class="bi fa fa-users"></i>
                                    <div class="card-body" style="margin-top: -50px;">
                                        <h5 class="card-title text-success">Planting Labour</h5>
                                        <p class="card-text">We provide cheep labour for planting seedlings, making
                                            firebreaks & prunning</p>
                                    </div>
                                </div>
                            </div>




                        </div>
                        {{-- container ends here --}}


                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- coursel ends here -->



        </div>
        <div class=" shadow-sm " style="margin-top: -45px;">

            <div class="  bg-success py-1 shadow-sm  text-center  " style="opacity: 0.8;">
                <h4 class=" text-white mt-1 "><b>3 MILLION+ SEEDLINGS AVAILABLE FROM 1st DECEMBER</b></h4>
            </div>
            <div class="row pt-2 shadow-sm mt-2" style=" ">
                @foreach ($activities as $activity)
                    <div class="col-md-6 mt-2 ">
                        <div class="card mb-3 shadow-sm " style="width:100%; "
                            data-scrollreveal="enter top over 1s after 1s">
                            <div class="row no-gutters">
                                <div class="col-md-4 shadow-sm py-2 ">
                                    <div style=" max-height: 400px;
                           overflow: hidden;">
                                        <a href='/storage/{{ $activity->image }}'target="_blank"><img
                                                src='/storage/{{ $activity->image }}' class="card-img px-1"
                                                alt="..."></a>
                                    </div>
                                    <p class="text-success px-3"><em>{{ $activity->caption }}</em></p>
                                    <p class="card-text px-3"><small
                                            class="text-muted">{{ $activity->updated_at->diffForHumans() }}</small></p>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body"
                                        style=" max-height: 400px;
                           overflow: hidden;">
                                        <h5 class="card-title text-success ">{{ $activity->title }}</h5>
                                        <p class="card-text">{{ $activity->description }}</p>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach


            </div>
            <div class="  bg-success py-1 shadow-sm  text-center  ">
                <h4 class=" text-white mt-1 "><b>UPDATES</b></h4>
            </div>
            @include('userComponents.updates')


            {{-- beginning of the service section --}}
            <div class="  bg-success py-1 shadow-sm  text-center  ">
                <h4 class=" text-white mt-1 "><b>SERVICES WE PROVIDE</b></h4>
            </div>

            @include('userComponents.homeServices')
            {{-- end of the service section --}}
            {{-- the feedback section start --}}
            <div class="  bg-success py-1 shadow-sm mt-2  text-center  ">
                <h4 class=" text-white mt-1 "><b>CUSTOMERS FEEDBACK MESSAGES</b></h4>
            </div>
            @include('userComponents.downCoursel')
            {{-- end of the feedback section --}}



            <script src="/js/anim.js"></script>
            <script src="/js/bootstrap.bundle.js"></script>
            <script type="/text/javascript" src="js/mdb.min.js"></script>
            <script src="/js/jquery-3.6.0.min.js"></script>
        </div>
    @endsection
