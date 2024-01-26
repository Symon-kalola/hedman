@extends('layouts.admin')
@section('content')
 <div class="card border-primary mb-3" style="max-width: 70%;margin:auto;">
  <div class="card-header  border-primary"><h4>Innovation Information</h4></div>
  <div class="card-body text-primary">
    <form action="/admin/add/innovation"  method="post" enctype="multipart/form-data" >
               
                @csrf
                
            
                       <div class="form-group">
                           <label for="" class="form-label">Innovation Title</label>
                           <input required type="text"  placeholder="enter title of Innovation heere" name="title" id="title" class="form-control">
                       </div>
                      
                      
        
                    <div class="form-group" >
                        <label for="" class="form-label">Caption</label>
                        <input type="text" placeholder="type innovation caption" class="form-control" id="caption" name="caption">
                    </div> 
                   
                       <div class="my-2 form-group">
                           <label for="" class="form-label">Description</label>
                           <textarea required name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                       </div>
                      
                        <div class="input-group mb-3">
                            <input required name="image" type="file" accept="image/*" class="form-control" id="image">
                        </div>
                         <div class="form-group">
                           <label for="innovator" class="form-label">Innovator Name</label>
                           <input required type="text"  placeholder="Enter name of the innovator" name="innovator" id="innovator" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="" class="form-label">email</label>
                           <input required type="email"  placeholder="Enter email" name="email" id="email" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="program" class="form-label">Program</label>
                           <input required type="text"  placeholder="Enter student program of study" name="program" id="program" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="" class="form-label">Year of study</label>
                           <input required type="text"  placeholder="year of study" name="year" id="year" class="form-control">
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

