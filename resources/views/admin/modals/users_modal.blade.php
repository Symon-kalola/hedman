<div class="modal fade" id="users_modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
              <div class="modal-header blue text-white">
                  <h5 class="modal-title" id="exampleModalCenteredScrollableTitle"><i class="fa fa-user me-1"></i>User</h5>
                  <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form id="modal_create_form" method="POST" action= "{{ route('admin.users.create') }}" >
                @csrf
                @method('post')
                    <div class="modal-body">
                       
                        <div class="form-group">
                            <div class="form-label">Name</div>
                            <input required type="text" name="name" id="users_modal_name" class="form-control">
                        </div>
                        <div class="my-2 form-group">
                            <label for="" class="form-label">Email</label>
                            <input required id="users_modal_email" name="email" type="email" class="form-control">
                        </div>
                        <div class="my-2 form-group">
                            <label for="" class="form-label">Role</label>
                            <select required name="role" id="users_modal_role" class="form-select">
                                <option value="Administrator">Administrator</option>
                                <option value="Firm">Firm</option>
                                <option value="Customer">Customer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Account Status</label>
                            <select name="status" id="users_modal_status" class="form-select">
                                <option value="Active">Active</option>
                                <option value="Disabled">Disabled</option>
                            </select>

                        </div>
                        <input id="users_modal_id" name="id" type="text" class="d-none">
                        
                       
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" style="font-size:12px"  class="btn bg-success text-white btn-sm shadow-ms" >Save</button>
                        <button id="users_modal_preset_btn" onclick="updateResource(this)" type="button" style="font-size:12px"  class="btn orange text-white btn-sm shadow-ms" >Reset Password</button>
                    </div>

            </form>
        </div>
    </div>
</div>

