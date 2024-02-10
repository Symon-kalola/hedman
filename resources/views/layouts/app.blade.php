<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'hedmannurseries' }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ mix('js/app.js') }}"></script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    {{-- here i go --}}
     <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" ></script>
      <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app ">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container-fluid">
                 <a class="navbar-brand logo text-success" href="#"><img style="height:30px;width:auto; font-weight:bolder;"
                    src="/images/icon.png"  class="mx-2 image-fluid rounded-circle"
                    alt="..">HEDMAN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"  style="margin-left: 60px" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto " >
                         <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-success" aria-current="page" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="/gallery">Gallery</a>
                            </li>
                               <li class="nav-item dropdown">
                                <a class="nav-link text-success  " href="/orders">My Orders <span class=" text-white circle"><small>0</small></span></a>
                            </li>
                        
                            <li class="nav-item dropdown">
                                <a class="nav-link text-success" href="/about">About us</a>
                            </li>
                          
                        </ul>

                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    
                    <div>
                    <ul class="navbar-nav ms-auto ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </div>
                </div>
            </div>
        </nav>

        {{-- my nav starts here --}}

        <main class="py-4">
            @yield('content')
        </main>



    <div class="container-fluid">
  <footer class="bg-success  ">
     <div class="container-fluid ">
         <div class="row  text-white ">
             <div class="col-sm-4  ">
                <div class="h4 text-white border-1 border-primary border-2 ">
                   Leave FeedBack
                </div>
                <div class=" form-outline text-white">
                    <form method="POST" action="/feedback/store">
                        @csrf
                           
                            {{-- <textarea name="" style="height: 10px " disabled  class="form-control bg-success text-white border-white" id="nameMessage" cols="30" rows="4" style="background:transparent;"></textarea> --}}
                            <input type="text" class="form-control form-control-sm text-success " name="name" id="place" placeholder="name">

                        </div>
                        <div class="form-outline text-white">
                                <label for="" class="form-label text-white">Your Message</label>
                                <textarea name="feedback"   class="form-control bg-success text-white border-white" id="feedback" cols="30" rows="4" style="background:transparent;"></textarea>
                        </div>
                      <button type="submit" class="btn btn-sm btn-primary tex-white mt-1">Send Feedback</button>

                      </form>
                
               </div>
             <div class="col-sm-4 mt-2 footer-col text-white">
                 <h5>Quick Links</h5>
                 <a href="/home">Home</a><br>
                 <a href="/gallery">Gallery</a><br>         
                 <a href="/about">About Us</a>
             </div>
             <div class="col-sm-4 footer-col text-white">
                 <h5><a href="#"></a></h5>
                 <h5><span class="fa fa-phone-volume me-2"></span>Contact Us:</h5>
                 <p id="num">0998672577 <br>
               <a href="https://wa.me/265998672577" ><span class="fab fa-whatsapp themec mx-1 " ></span>Chat on whatsapp</a>
              <a href="https://facebook.com/groups/689169124490599/" ><span class="fab fa-facebook mx-1  " style="color: rgba(18, 132, 224, 0.877)"></span>facebook</a>

                    <br>
                    <a href="mailto:hedmannursery.gmail.com " class="fa fa-envelope" >  Send email</a>

                 </p>
                 <P class="small">Or visit our offices located in Gwamba bulding behind <br>Northen region Water board Kawiluwilu house in Mzuzu</P>
   
             </div>

             <div class="d-flex  footer-row px-sm-5">
                  <h6>hedman &copy; 2024</h6>
                 

             </div>

         </div>

     </div>
 </footer>
    </div>
</body>

<script>
    
     function setupConfirmDelete(btn){
   
      $('#confirm_delete_name').text($(btn).attr('data-name'));
      $('#confirm_delete_route').val($(btn).attr('data-route'));
     
  }
  
</script>

</html>
