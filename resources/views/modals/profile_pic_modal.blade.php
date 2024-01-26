
<div class="modal  fade" id="profile_pic_modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white blue" >
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Profile Pic</h5>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form id="profile_pic_form" action="">
            <div class="modal-body"> 
                <div class="my-2 form-group">
                                <label for="" class="form-label">Profile Pic</label>
                                <div class="col-md text-center " >
                                    <img id="profile_pic_modal_image" src="@if(isset(Auth::user()->image)) {{ asset(Auth::user()->image) }} @else {{ asset('images/user-dark.png') }} @endif" alt="" height="100px"  style="object-size:fit" class="rounded-circle text-center">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input required name="profile_pic" type="file" accept="image/*" class="form-control" id="profilePicInput">
                            </div>
                            @if(isset(Auth::user()->image))
                               <button onClick="setupConfirmDelete(this)" data-name="profile photo" data-route="{{ route('users.profilepic.delete')}}" data-bs-toggle="modal" data-bs-target="#confirm_delete_modal" style="font-size:12px" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove Photo</button>
                            @endif
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm " style="font-size:12px;background-color:MediumSeaGreen" >Upload</button>
               
            </div> 
</form>
        </div>
    </div>
</div>
<script>
   
     $(document).on('change','#profilePicInput',function(){
           
           var file = document.getElementById("profilePicInput").files[0];
           if(file){
               document.getElementById('profile_pic_modal_image').src=URL.createObjectURL(file)
           }
      });


      $(document).ready(function(){
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          $('#profile_pic_form').submit(function(e){
               
               e.preventDefault();
            

               formData = new FormData();
               formData.append('profilePic', document.getElementById("profilePicInput").files[0]);
              
                $.ajax({
                    type:'POST',
                    url: "{{ url('/ausers/profilepic/set') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        alert(response.success);
                        location.reload();
                    },
                    error:function(err){
                        console.log(err);
                        alert("Error in uploading profile pic");
                    }
                });

          });
      });
</script>

