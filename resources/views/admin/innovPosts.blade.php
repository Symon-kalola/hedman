@extends('layouts.admin')
@section('content')
@include('admin.modals.innovEdit')


<div class="mb-1 d-flex justify-content-between align-items-center text-bs-secondary bg-white border shadow-sm p-2 py-3">
   <div class="h6 m-0"><i style="font-size:16px"class="fa fa-paper-plane text-orange me-2"></i>Innovations Posted</div>

</div> 

<div class="card shadow-sm" style="height: 100vh; overflow:scroll;">
    @foreach ($innovations as $innovation )
     <div class="card mb-3 shadow-sm " style="width:100%; " data-scrollreveal="enter top over 2s after 1s">
                    <div class="row no-gutters">
                    <div class="col-md-4 shadow-sm py-2 ">
                        <img src='/storage/{{ $innovation->image  }}' class="card-img px-1" alt="...">
                        <p class="text-primary px-3"><em> {{ $innovation->caption }} </em></p>
                        <p class="card-text px-3"><small class="text-muted">Last updated {{ $innovation->updated_at->diffForHumans( ) }}</small></p>

                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                            <h5 class="text-primary ">{{ $innovation->title }}</h5>
                               <div class="d-flex">
                                 <button onClick="setupProductEdit(this)" data-toggle="tooltip" data-placement="left" title="Edit post" data-id="{{ 2}}" data-status="{{ 2}}" target="edit" data-name="{{ 2}}" data-price="{{ 2 }}" data-desc="{{ 2}}" data-transid="{{ 2}}" data-paymode="{{ 2}}" data-image="{{2}}" data-bs-toggle="modal" data-bs-target="#innovEdit_modal" class="btn btn-sm text-blue shadow-sm" style="font-size:13px"><i class="fa fa-edit fa-sm"></i></button>
                                <button onClick="setupConfirmDelete(this)" data-toggle="tooltip" data-placement="left" title="Delete Post" data-bs-toggle="modal"  data-bs-target="#confirm_delete_modal" data-name={{$innovation->title}} data-route="/admin/innov/delete/{{$innovation->id}}" class="btn btn-sm text-blue ms-1 shadow-sm" style="font-size:13px"><i class="fa fa-trash fa-sm"></i></button>
                               </div>

                        </div>
                        
                        <p class="card-text">{{ $innovation->description }}</p>
                        {{-- middle card start --}}
                        <div class="card" style="width:80%">
                            <div class="card-header">
                                <h5>Innovator Details</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Name  : </b>{{ $innovation->innovator }}</li>
                                <li class="list-group-item"><b>Program : </b>{{ $innovation->program }}</li>
                                <li class="list-group-item"><b>Year  : </b>{{ $innovation->year }}</li>
                                <li class="list-group-item"><b>Email : </b><a href='{{ $innovation->email }}'>{{ $innovation->email }}</a></li>
                               
                            </ul>
                            </div>
                        

                    </div>
                    </div>
                </div>
                </div>

        
    @endforeach
    
         
                   

            

    

            


  
       
    
</div>



@endsection
