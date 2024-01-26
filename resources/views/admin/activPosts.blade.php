@extends('layouts.admin')
@section('content')
@include('admin.modals.activEdit')

<div class="mb-1 d-flex justify-content-between align-items-center text-bs-secondary bg-white border shadow-sm p-2 py-3">
   <div class="h6 m-0"><i style="font-size:16px"class="fa fa-paper-plane text-orange me-2"></i>Activities Posted</div>
</div> 

<div class="card shadow-sm" style="height: 100vh; overflow:scroll;">
    @foreach ($activities as $activity )
      <div class="card mb-3 shadow-sm " style="width:100%; " data-scrollreveal="enter top over 2s after 1s">
                    <div class="row no-gutters">
                    <div class="col-md-4 shadow-sm py-2 ">
                        <img src='/storage/{{ $activity->image  }}' class="card-img px-1" alt="...">
                        <p class="text-primary px-3"><em> {{ $activity->caption }} </em></p>
                        <p class="card-text px-3"><small class="text-muted">Last updated {{ $activity->updated_at->diffForHumans( ) }}</small></p>

                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                            <h5 class="text-primary ">{{ $activity->title }}</h5>
                             <div class="d-flex">
                                 <button onClick="setupProductEdit(this)" data-toggle="tooltip" data-placement="top" title="Edit post" data-id="{{ 2}}" data-status="{{ 2}}" target="edit" data-name="{{ 2}}" data-price="{{ 2 }}" data-desc="{{ 2}}" data-transid="{{ 2}}" data-paymode="{{ 2}}" data-image="{{2}}" data-bs-toggle="modal" data-bs-target="#activEdit_modal" class="btn btn-sm text-blue shadow-sm" style="font-size:13px"><i class="fa fa-edit fa-sm"></i></button>
                                <button onClick="setupConfirmDelete(this)" data-toggle="tooltip" data-placement="top" title="Delete Post" data-bs-toggle="modal"  data-bs-target="#confirm_delete_modal" data-name='kalola' data-route="/admin/activity/delete/{{$activity->id}}" class="btn btn-sm text-blue ms-1 shadow-sm" style="font-size:13px"><i class="fa fa-trash fa-sm"></i></button>

                               </div>

                        </div>
                        
                        <p class="card-text">{{ $activity->description }}</p>
                        

                    </div>
                    </div>
                </div>
                </div>

            
        
    @endforeach
    
         
                  

    

            


  
       
    
</div>



@endsection
