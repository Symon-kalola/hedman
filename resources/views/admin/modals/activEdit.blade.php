<div class="modal fade" id="activEdit_modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-centered">
        <div class="modal-content">
              <div class="modal-header blue text-white">
                  <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Activity Edit</h5>
                  <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form id="product_create_form" >
                <div id="products_modal_content">
                @csrf
                <!-- @method('put') -->
                <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="form-label">Activity Title</label>
                            <input required type="text" name="name" id="product_modal_name" class="form-control">
                        </div>
                        <div class="my-2 form-group">
                           <label for="" class="form-label">Activity caption</label>
                           <input placeholder="enter name of innovator"required type="text" name="price" id="product_modal_price" class="form-control">
                       </div>
                       <div class="my-2 form-group">
                           <label for="" class="form-label">Activity Description</label>
                           <textarea required name="description" id="product_modal_description" cols="30" rows="5" class="form-control"></textarea>
                       </div>
                       <div class="my-2 form-group">
                            <label for="" class="form-label">Activity Cover Photo</label>
                             <div class="col-md " >
                                <img id="product_modal_image" src="{{ asset('images/ph.png') }}" alt="" height="200px" class="">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input required name="cover_photo" type="file" accept="image/*" class="form-control" id="productImageInput">
                        </div>
                        <input type="text" id="product_modal_id"  class="d-none">

                        </div>
                         
                       
                     
                </div>
                
                <div class="modal-footer">
                        <button  style="font-size:12px"  class="btn orange text-white btn-sm shadow-ms" data-bs-dismiss="modal" aria-label="Close" >Update</button>
                </div>
                </div>

                <div class="modal-body d-none" id="products_modal_loading">
                
                    <div class=" bg-primary text-white">
                        <i style="font-size:20px" class="text-info fas fas-lg fa-circle-notch fa-spin"></i><span class="small">  Proccessing...</span>
                    </div>
                            
                </div>
              

            </form>
        </div>
    </div>
</div>
<script>
     $(document).on('change','#productImageInput',function(){
           
           var file = document.getElementById("productImageInput").files[0];
           if(file){
               document.getElementById('product_modal_image').src=URL.createObjectURL(file)
           }
      });
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

           $('#product_create_form').submit(function(e){
               
                 e.preventDefault();

                 $('#products_modal_content').addClass('d-none');
                 $('#products_modal_loading').removeClass('d-none');
                
                 formData = new FormData();
                 formData.append('productImage', document.getElementById("productImageInput").files[0]);
                 formData.append('name', $('#product_modal_name').val());
                 formData.append('price', $('#product_modal_price').val());
                 formData.append('description', $('#product_modal_description').val());
                 formData.append('id', $('#product_modal_id').val());
                 formData.append('trans_id', $('#trans_id').val());
                 formData.append('trans_type', $('#trans_id').val());


               
                if($('#product_modal_id').val()==""){

                    $.ajax({
                        type:'POST',
                        url: "{{ url('/firm/products/create') }}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success:function(response){
                            alert(response.success);
                            location.reload();
                        },
                        error:function(err){
                            console.log(err);
                            alert("Error in creating product");
                        }
                    });
                }
                else{
                    $.ajax({
                        type:'POST',
                        url: "{{ url('/firm/products/edit') }}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success:function(response){
                            alert(response.success);
                            location.reload();
                        },
                        error:function(err){
                            console.log(err);
                            alert("Error in editing product");
                        }
                    });
                }
                
              

            });
      });
</script>
