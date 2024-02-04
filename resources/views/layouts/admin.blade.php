<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
   
     <!-- Scripts -->
   
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"
    
</head>
<body   >

     @include('modals.profile_pic_modal')
     @include('modals.confirm_delete')

     <!-- main navigation -->
     <nav class="main-nav navbar navbar-expand-lg navbar-light bg-white  sticky-top">
        <div class="container-fluid">
             <a class="navbar-brand logo" href="#"><img style="height:45px;width:auto; font-weight:bolder;"
                src="/images/pocist.jpeg"  class="mx-2 image-fluid rounded-circle"
                    alt="..">POCITS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
                <div class="btn-group me-4">
                    <button type="button" style="font-size:11px" class="m-0 shadow-none btn btn-sm btn-dark text-white dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    <span class="m-0 h6 fa fa-user-circle m-1"></span>  @isset(Auth::User()->name )    {{ Auth::User()->name }} @endisset                    </button>
                    <ul class="dropdown-menu  dropdown-menu-lg-end">
                    
                       <form action="{{ route('logout') }}" method="post">
                           @csrf
                           <li><button class="dropdown-item m-0" >Logout<span class="text-dark fa fa-sign-out" aria-hidden="true"></span></button></li>
                         
                       </form> 
                       
                        <li><button class="dropdown-item" type="button">Edit Profile <span class="text-dark fa fa-sign-out" aria-hidden="true"></span></button></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
     </nav>
     <!-- main navigation end -->

     <!-- mobile nav toggle start -->
     <div class="container-fluid d-block d-lg-none blue p-0 position-relative">
            <div class="d-flex p-0">
                <button class="btn blue text-white p-0 shadow-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="fa fa-bars m-2 p-1  "></span>Menu 
                </button>
            
            </div>

    </div>
    <!-- mobile nav toggle end -->
    
    <main class="main m-0 p-0 bg-white">
        <!-- mobile nav -->
          @include('admin.subviews.offcanvas_nav')
        <!-- mobile nav end -->

        <div class="row m-0 h-100 bg-white justify-content-between  p-0">

                <!-- desktop nav start -->
                <div class="m-0 p-0 col-lg-2 h-100 aside-nav card shadow-md border-0 border-end h-100   rounded-0 d-none d-lg-block ">
                    
                       <div class="shop-name-label  py-2 text-center blue text-white">
                            <div class="d-flex justify-content-center align-items-below">
                               <img style="object-fit:cover; width:100px; height:100px;" src="@if(isset(Auth::user()->image))   {{ asset(Auth::user()->image) }} @else /images/mz.jpg @endif" alt="..."  class="rounded-circle mt-1">
                               <div class=" d-flex align-items-above">
                                 <button data-bs-toggle="modal" data-bs-target="#profile_pic_modal" style="font-size:12px;height:20px" class="p-0 btn blue text-white  shadow-none"><i class="p-0 fa fa-edit"></i></button>

                               </div>
                            </div>
                            <div class="mt-1"> Hedman Administrator</div> 
                        </div>

                        <div class="list-group  text-secondary border-0" id="list-tab" role="tablist">
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/home')  active @endif"  href="/admin/home" aria-controls="list-home" ><span class="fa fa-home m-2  @if(Route::currentRouteName() == '/admin/home')  text-white @else text-bs-secondary @endif"></span>HOME</a>
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/posts/activities')  active @endif"   href="/admin/posts/activities"><span class="fa fa-clipboard-list m-2 @if(Route::currentRouteName() == '/admin/posts/activities')  text-white @else text-bs-secondary @endif"></span>Activities Posts</a>
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/posts/innovations')  active @endif"   href="/admin/posts/innovations"><span class="fa fa-clipboard-list m-2 @if(Route::currentRouteName() == '/admin/posts/innovations')  text-white @else text-bs-secondary @endif"></span>Innovation Posts</a>

                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/activity')  active @endif"   href="/admin/activity"  aria-controls="list-messages"><span class="fa fa-users m-2 @if(Route::currentRouteName() == '/admin/activity')  text-white @else text-bs-secondary @endif"></span>Add activity</a>
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/innovation')  active @endif"   href="/admin/innovation"><span class="fa fa-rocket m-2 @if(Route::currentRouteName() == '/admin/innovation')  text-white @else text-bs-secondary @endif"></span>Add innovation</a>
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin.partners')  active @endif"   href="/admin/partners"><span class="fa fa-address-card m-2 @if(Route::currentRouteName() == '/admin/partners')  text-white @else text-bs-secondary @endif"></span>Partners</a>

                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/help')  active @endif"   href=" /admin/help"  aria-controls="list-messages"><span class="fa fa-question m-2 @if(Route::currentRouteName() == '/admin/help')  text-white @else text-bs-secondary @endif"></span>help</a>


                        </div>

                        <div class="small text-orange text-center  mt-5 pt-4 ">&copy; hedman @php echo date('Y') @endphp</div>
                        
                </div>
                <!-- end of desktop nav -->

                <!-- center pane start -->
                <div class="bg-light col-lg-10 ">
                    <div class="bg-light py-2" >
                       @yield('content')
                    </div>
                </div >
                <!-- end of center pane, col 2 -->
        </div>
    </main>

    
    
  
</body>
<script>
     function setupConfirmDelete(btn){
   
      $('#confirm_delete_name').text($(btn).attr('post-id'));
      $('#confirm_delete_route').val($(btn).attr('data-route'));
     
  }
  function updateResource(btn){
        location.href=$(btn).attr('data-route');
    }
</script>


</html>

