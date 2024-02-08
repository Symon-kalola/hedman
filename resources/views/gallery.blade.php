@extends('layouts.app');
@section('content')
<link rel="stylesheet" href="/css/innoc.css">
<h4 class="text-center gh text-success" >Hedman Nurseries Photos</h4>
    <div class="container-fluid ">
       
       
   
        <div class="row" >
                 @foreach ($innovations as $innovation )
            <div class="column " >
                                    

                  <a href="/storage/{{ $innovation->image  }}" target="_blank" data-toggle ="tooltip" data-placement="top" 
                    title={{ $innovation->innovator  }}>
                     <img src='/storage/{{ $innovation->image  }}'  alt="Student presenting a drone" class="card-img-top h-200  shadow-lg" ></a> 
                
            </div>
            @endforeach

            
        </div>
        
        


    </div>
    

@endsection