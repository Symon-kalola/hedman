 <div class="offcanvas offcanvas-start bg-white" tabindex="-2" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title text-blue fw-bold" id="offcanvasExampleLabel">Hedman Nurseries Malawi</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body m-0 p-0">
   
    <div class="shop-name-label  py-2 text-center blue text-white">
                            <div class="d-flex justify-content-center align-items-below">
                               <img style="object-fit:cover; width:100px; height:100px;" src="@if(isset(Auth::user()->image))   {{ asset(Auth::user()->image) }} @else /images/mz.jpg @endif" alt="..."  class="rounded-circle mt-1">
                               <div class=" d-flex align-items-above">
                                 <button data-toggle="tooltip" data-placement="top" title="Edit profile pic" data-bs-toggle="modal" data-bs-target="#profile_pic_modal" style="font-size:12px;height:20px" class="p-0 btn blue text-white  shadow-none"><i class="p-0 fa fa-edit"></i></button>

                               </div>
                            </div>
                            <div class="mt-1"> Hedman Administrator</div> 
                        </div>
                        
                          <div class="list-group  text-secondary border-0" id="list-tab" role="tablist">
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/home')  active @endif"  href="/admin/home" aria-controls="list-home" ><span class="fa fa-home m-2  @if(Route::currentRouteName() == '/admin/home')  text-white @else text-bs-secondary @endif"></span>HOME</a>
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/posts/activities')  active @endif"   href="/admin/posts/activities"><span class="fa fa-clipboard-list m-2 @if(Route::currentRouteName() == '/admin/posts/activities')  text-white @else text-bs-secondary @endif"></span>Product Posted</a>
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/posts/innovations')  active @endif"   href="/admin/posts/innovations"><span class="fa fa-clipboard-list m-2 @if(Route::currentRouteName() == '/admin/posts/innovations')  text-white @else text-bs-secondary @endif"></span>Photos Posted</a>

                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/activity')  active @endif"   href="/admin/activity"  aria-controls="list-messages"><span class="fa fa-users m-2 @if(Route::currentRouteName() == '/admin/activity')  text-white @else text-bs-secondary @endif"></span>Add Product</a>
                            <a style="font-size:12px " class="border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/innovation')  active @endif"   href="/admin/innovation"><span class="fa fa-rocket m-2 @if(Route::currentRouteName() == '/admin/innovation')  text-white @else text-bs-secondary @endif"></span>Add Photos</a>
                            <a style="font-size:12px " class="disabled deactivated border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin.partners')  active @endif"   href="/admin/partners"><span class="fa fa-address-card m-2 @if(Route::currentRouteName() == '/admin/partners')  text-white @else text-bs-secondary @endif"></span>Orders</a>

                            <a style="font-size:12px " class=" disabled border-0 rounded-0 border-top list-group-item list-group-item-action text-bs-secondary @if(Route::currentRouteName() == '/admin/help')  active @endif"   href=" /admin/help"  aria-controls="list-messages"><span class="fa fa-envelope m-2 @if(Route::currentRouteName() == '/admin/help')  text-white @else text-bs-secondary @endif"></span>Feedback Messages</a>


                        </div>


                        <div class="small text-orange text-center  mt-5 pt-4 ">&copy; hedman @php echo date('Y') @endphp </div>
      </div>
</div> 
