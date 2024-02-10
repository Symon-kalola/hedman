@extends('layouts.admin')
@section('content')
 <div class="card border-primary mb-3" style="max-width: 70%;margin:auto;">
  <div class="card-header  border-primary"><h4>Image Information</h4></div>
  <div class="card-body text-primary">
    <form action="/admin/add/innovation"  method="post" enctype="multipart/form-data" >
               
                @csrf
                
            
                   
                      
                      
                        <div class="form-group mb-3">
                            <h4>Choose an image</h4>
                            <input required name="image" type="file" accept="image/*" class="form-control" id="image">
                        </div>
                         <div class="form-group">
                           <label for="innovator" class="form-label">About pic</label>
                           <input required type="text"  placeholder="Enter name of the innovator" name="innovator" id="innovator" class="form-control">
                       </div>
                    
                   
                     
                     
                </div>
                <div class="card-footer">
                        <button onclick="posting()"  style="font-size:12px"  class="btn btn-primary text-white btn-sm shadow-ms" >Post Activity</button>
                </div>
                </div>

            
              

            </form>






            

  </div>
</div>

<script>
    function posting()
    {
        window.alert('Posted Successfully')
    }
</script>


@endsection

