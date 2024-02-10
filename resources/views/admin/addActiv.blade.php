@extends('layouts.admin')
@section('content')
 <div class="card border-primary mb-3" style="max-width: 70%;margin:auto;">
  <div class="card-header  border-primary"><h4>Products Information</h4></div>
  <div class="card-body text-primary">
    <form action="/admin/add/activity"  method="post" enctype="multipart/form-data" >
               
                @csrf
              
            
                       <div class="form-group">
                           <label for="" class="form-label">Title</label>
                           <input required type="text"  placeholder="title of activity" name="title" id="title" class="form-control">
                       </div>
                        
                    <div class="form-group" >
                        <label for="" class="form-label">Caption</label>
                        <input type="text" placeholder="type your about here" class="form-control" id="caption" name="caption">
                    </div> 
                   
                       <div class="my-2 form-group">
                           <label for="" class="form-label">Description</label>
                           <textarea required name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                       </div>
                      
                        <div class="input-group mb-3">
                            <input required name="image" type="file" accept="image/*" class="form-control" id="image">
                        </div>
                        
                     
                     
                </div>
                <div class="card-footer">
                        <button  style="font-size:12px"  class="btn btn-primary text-white btn-sm shadow-ms" >Post</button>
                </div>
                </div>

            
              

            </form>

  </div>
</div>



@endsection

