<div class="modal  fade" id="confirm_delete_modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white blue" >
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Confirm Delete</h5>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body"> 

                 <h4 class="h6">Are you sure you want to delete <span id="confirm_delete_name" class="fw-bold"></span> ?</h4>
                 <input type="text" id="confirm_delete_route" class="d-none">
            </div>
            <div class="modal-footer">
                <button  class="btn btn-primary btn-sm " style="font-size:12px;background-color:MediumSeaGreen" data-bs-dismiss="modal">No</button>
                <button onClick="delete_resource()" class="btn btn-sm blue text-white" style="font-size:12px;">Yes</button>
            </div> 
        </div>
    </div>
</div>
<script>
    function delete_resource(){
         location.href=$('#confirm_delete_route').val();
    }
</script>

