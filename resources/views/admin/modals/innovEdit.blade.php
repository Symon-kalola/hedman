<div class="modal fade" id="innovEdit_modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-centered">
        <div class="modal-content">
              <div class="modal-header blue text-white">
                  <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Innovation Edit</h5>
                  <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form id="product_create_form" >
                <div id="products_modal_content">
                @csrf
                <!-- @method('put') -->
                <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="form-label">Innovation Title</label>
                            <input required type="text" name="name" id="product_modal_name" class="form-control">
                        </div>
                       <div class="my-2 form-group">
                           <label for="" class="form-label">Innovator Name</label>
                           <input placeholder="enter name of innovator"required type="text" name="price" id="product_modal_price" class="form-control">
                       </div>
                          <div class="my-2 form-group">
                           <label for="" class="form-label">Innovator email</label>
                           <input placeholder="enter email of enovator"required type="text" name="price" id="product_modal_price" class="form-control">
                       </div>

                        <div class="my-2 form-group">
                           <label for="" class="form-label">Innovator caption</label>
                           <input placeholder="enter name of innovator"required type="text" name="price" id="product_modal_price" class="form-control">
                       </div>
                       <div class="my-2 form-group">
                           <label for="" class="form-label">Innovation Description</label>
                           <textarea required name="description" id="product_modal_description" cols="30" rows="5" class="form-control"></textarea>
                       </div>
                       <div class="my-2 form-group">
                            <label for="" class="form-label">Innovation Cover Photo</label>
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
                        <button  style="font-size:12px"  class="btn orange text-white btn-sm shadow-ms" >Update</button>
                </div>
                </div>

                <div class="modal-body d-none" id="products_modal_loading">
                
                    <div class="text-center">
                        <i style="font-size:20px" class="text-info fas fas-lg fa-circle-notch fa-spin"></i><span class="small">  Processing. Please wait...</span>
                    </div>
                            
                </div>
              

            </form>
        </div>
    </div>
</div>

