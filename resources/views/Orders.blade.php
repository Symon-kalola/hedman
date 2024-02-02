@extends('layouts.app')
@section('content')
    <div class="container-fluid">
      <table class="table table-striped" style="overflow-x:auto ">
            <thead class="text-success">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Cost</th>
                <th scope="col">Total</th>
                <th scope="col">Delivery District</th>
                 <th scope="col">Delivery Point</th>
                 <th scope="col">Contact1</th>
                  <th scope="col">Contact2</th>
                <th scope="col">Payment</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
              @for ($x=0;$x<=20;$x++)
                  <tr>
                <th scope="row">{{$x }}</th>
                <td>Blueghum</td>
                <td>100</td>
                <td>MK2</td>
                <td>MK200</td>
                <td>Rumphi</td>
                <td>Depot</td>
                <td>0882751360</td>
                <td>0991491663</td>
                <td class="text-danger">Payed</td>
                <td class="text-danger">Sent</td>
                <td style="display: inline-flex;" class="pt-3"><i class="fa fa-pen text-success me-3" ></i><i class=" fa fa-eye-slash text-warning"></i><span class=" ms-3 fa fa-trash text-danger"></i></td>
                <td></td>
                </tr> 
              @endfor
                
               
            </tbody>
            </table>
    </div>
     
</div>
@endsection