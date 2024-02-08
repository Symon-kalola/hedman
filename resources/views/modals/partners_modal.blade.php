<script src="{{ mix('js/app.js') }}"></script>

<div class="modal fade" id="partners_modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-centered">
        <div class="modal-content">
              <div class="modal-header bg-success text-white">
                  <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">ENTER YOUR ORDER DETAILS</h5>
                  <button  type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="py-2 PX-3 card-body">
                <form id="orderForm" method="POST" action="/order/store" >
                    @csrf
                        <div class="form-group row d-none d-md-flex">
                            <label  class="col-sm-2 col-form-label text-success">NAME</label>
                            <div class="col-sm-5 d-flex mt-1">
                                <p class="form-check-label " >Pine</p>
                            </div>
                            <div class="col-sm-5 d-flex mt-1">
                                <p class="form-check-label " >BlueGum</p>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for=" pineQuant " class="col-sm-2 col-form-label text-success">QUANTITY</label>
                            <div class="col-sm-5">
                                <p class="form-check-label d-block d-sm-none  " >Pine</p>
                            <input type="number"  oninput="updateResult()"  value="0" min="0" class="form-control form-control-sm " id="pine" name="pine" placeholder="Pine">
                            </div>
                            <div class="col-sm-5 ">
                                <label class="form-check-label d-block d-sm-none  " id="blueQuant" >Bluegum</label>
                            <input type="number" name="blue"  oninput="updateResult()" value="0"  min="0" class=" form-control form-control-sm mar " id="blu" placeholder="BlueGum">
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                                <p class="col-sm-2 col-form-label text-success ">PAYMENT</p>
                                <div class="col-sm-10 mt-2">
                                    <h6 class="text-danger" id="total" >MK 0.0</h6>
                                </div>
                         
                        </div>
                        <div class="form-group row mt-2 bg-success">
                          <h6 class="text-succes shadow-sm text-white pt-2">DELIVERY INFORMATION</h6>
                        </div>
                      <div class="form-group row mt-2">
                           <label for="  dis" class="col-sm-2 col-form-label text-success ">DISTRICT</label>
                            <div class="col-sm-10">
                                <select class="form-control form-control-sm " id="district" name="district">
                                    <option value="Mzuzu">Balaka</option>
                                    <option value="Blantyre">Blantyre</option>
                                    <option value="Chikwawa">Chikwawa</option>
                                    <option value="Chiradzulu">Chiradzulu</option>
                                    <option value="Chitipa">Chitipa</option>
                                    <option value="Dedza">Dedza</option>
                                    <option value="Dowa">Dowa</option>
                                    <option value="Kalolga">Kalonga</option>
                                    <option value="Kasungu">Kasungu</option>
                                    <option value="Likoma">Likoma</option>
                                    <option value="Lilongwe">Lilongwe</option>
                                    <option value="Machinga">Machinga</option>
                                     <option value="Mangochi">Mangochi</option>
                                    <option value="Mchinji">Mchinji</option>
                                    <option value="Mulanje">Mulanje</option>
                                    <option value="Mwanza">Mwanza</option>
                                    <option value="Mzimba">Mzimba</option>
                                    <option value="Mzuzu">Mzuzu</option>
                                    <option value="Neno">Neno</option>
                                    <option value="Nkhatabay">Nkhatabay</option>
                                    <option value="Nkhotakota">Nkhotakota</option>
                                    <option value="Nsanje">Nsanje</option>
                                    <option value="Ntcheu">Ntcheu</option>
                                    <option value="Ntchisi">Ntchisi</option>
                                    <option value="Phalombe">Phalombe</option>
                                    <option value="Rumphi">Rumphi</option>
                                    <option value="Salima">Salima</option>
                                    <option value="Thyolo">Thyolo</option>
                                    <option value="Zomba">Zomba</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="place" class="col-sm-2 col-form-label text-success ">PLACE</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm text-success " name="place" id="place" value="me" placeholder="Enter delivery place">
                            </div>
                       </div>
                       <div class="form-group row mt-2">
                            <label for="airtel" class="col-sm-2 col-form-label text-success ">AIRTEL</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control form-control-sm  " value="+265 9" name="airtel" id="airtel" placeholder="Enter phone number">
                            </div>
                       </div>
                        <div class="form-group row mt-2">
                            <label for="tnm" class="col-sm-2 col-form-label text-success  ">TNM</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control form-control-sm   " value="+265 8" name="tnm" id="tnm" placeholder="Enter phone number">
                            </div>
                       </div>
                         <button type="submit" class="btn btn-sm btn-primary fa fa-paper-plane" > submit</button>
                      
                  
                    </form> 
                    {{-- eeends --}}
              </div>

        </div>
    </div>
</div>

<script type="text/javascript">
        function updateResult() {
            var pineQuant = document.getElementById('pineQuant').value;
            var blueQuant = document.getElementById('blueQuant').value;
               var result = (parseFloat(pineQuant) + parseFloat(blueQuant))*185;
               console.log(result); 
           document.getElementById('total').innerHTML =  (isNaN(result) ? 'error in calculating total please check your input [enter valid number or 0]' :'MK'+ result);
        }
    

    //    $(document).ready(function(e){
    //         $('#orderForm').on('submit', function(e)
    //         {
    //            e.preventDefault();
                
    //         });
    //         $.ajax({
                
               
    //              type:'post',
    //              data:$('#orderForm').serialize(),
    //              url :'/order/store',
    //             success:function(resultwq)
    //             {

    //             }
               
             
             


    //         });
            
    //    })

</script>



