@extends('layouts.app');
@section('content')
<link rel="stylesheet" href="/css/innoc.css">
<h4 class="text-center text-success">Hedman Photos</h4>

   
    <div class="container shadow-lg">
        @for ($x=0;$x<=1;$x++)
            
       
   
        <div class="row " >
                 @foreach ($innovations as $innovation )

            
            <div class="col-md-3  " data-scrollreveal="enter fade-up over 2s after 1s">
                <div class="card h-100 mt-2">
                    <img src='/storage/{{ $innovation->image  }}'  alt="Student presenting a drone" class="card-img-top h-200  shadow-lg" >
                  
                    <h4 class="text-white" style="margin-top:-40px;">{{ $innovation->innovator }}</h4>
                </div>
            </div>
            @endforeach

            
        </div>
         @endfor
        


    </div>

@endsection