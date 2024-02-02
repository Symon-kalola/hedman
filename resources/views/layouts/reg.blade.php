<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'pocists') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    {{-- here i go --}}
     <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" ></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body style="background-color: rgb(21, 133, 67);">
    <div id="app ">
        


        <main class="py-4">
            @yield('content')
        </main>



  
   
    </div>
</body>
</html>
