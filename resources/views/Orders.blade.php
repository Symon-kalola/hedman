@extends('layouts.app')
@include('modals.partners_modal')
<script src="{{ asset('/js/jquery-3.6.0.min.js') }}" ></script>
    
@section('content')
    <div class="container-fluid" style="min-height: 600px;">
      <button class="btn btn-sm btn-success fa fa-shopping-cart" data-bs-toggle="modal" data-bs-target="#partners_modal"> Make order</button>
      <table class="table table-striped" style="overflow-x:auto ">
            <thead class="text-success">
                <tr>
  
                <th scope="col">Pine</th>
                  <th scope="col">Bluegum</th>
                <th scope="col">Cost/seedling</th>
                <th scope="col">Total</th>
                <th scope="col">Delivery District</th>
                 <th scope="col">Delivery Place</th>
                 <th scope="col">Contact1</th>
                  <th scope="col">Contact2</th>
                    <th scope="col">Ordered Made</th>
                <th scope="col">Payment</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
             
              @foreach ($orders as $order )
                  <tr>
               
                <td>{{  $order->pine}}</td>
                <td>{{ $order->blue}}</td>
                  <td> MK 185</td>
                <td>MK {{  $order->price}}</td>
                <td>{{ $order->district }}</td>
                <td>{{ $order->place }}</td>
                 <td>{{ $order->phone1 }}</td>
                  <td>{{ $order->phone2 }}</td>
                   <td>{{ $order->created_at->diffForHumans( ) }}</td>
                    <td>{{ $order->payment }}</td>
                     <td>{{ $order->status }}</td>
              
                <td style="display: inline-flex;" class="pt-3"><i class="fa fa-pen text-success me-3" ></i><i class=" fa fa-eye-slash text-warning"></i><span class=" ms-3 fa fa-trash text-danger"></i></td>
                <td></td>
                </tr> 
              @endforeach
                
               
            </tbody>
            </table>
    </div>
     
</div>
@endsection
{{-- <script>
  $(document).on('click','button[id="orderForm"]',function(e){
    e.preventDefault();
    console.log('kkkkk');
  
       
      //  let id = this.getAttribute('data-id');
      //  let _token = "{{ csrf_token()}}";
      //  $('#commentView').removeClass('d-none');
      //  $.ajax({
      //       headers: {
      //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //       },
      //       url : "{{ url('loadComments') }}",
      //       data : {
      //           id:id,
      //           _token: _token
      //           },
      //       type : 'GET',
      //       dataType : 'json',
      //       beforeSend: function() {
      //       //something before send
      //       $('#commentView').addClass('d-none');
      //       },
      //       success : function(result){
                
                
      //           if(result.success == true) {
      //         //user_jobs div defined on page
      //         $('#commentView').removeClass('d-none');
      //         $("#commentView").html(result.html);
              
              
      //       } else{
      //           console.log('Failed');
      //       }
      //       }
      //   });
    });
</script> --}}