@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Purchase
  </button>
  <button type="button" class="btn btn-success">
      <i class="fa fa-file-excel" aria-hidden="true"></i>
    Export Excel
    </button>
    <button type="button" class="btn btn-success">
        <i class="fa fa-file-pdf" aria-hidden="true"></i>
      PDF
      </button>
      <button type="button" class="btn btn-success" onclick="PrintDiv()">
          <i class="fa fa-print" aria-hidden="true"></i>
        Print
        </button>
   </button>
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Manage Purchases</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('purchases.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="itemName">Item Name: </label>
                  <input type="text" name="iname" class="form-control" id="itemName" placeholder="Item Name">
                </div>
                <div class="form-group form-inline">
                  <label for="supName">Supplier Name: </label>
                  <input type="text" name="supname" class="form-control" id="supName" placeholder="Supplier Name">
                </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select name="pstat">
                    <option>Active</option>
                    <option>inactive</option>
                  </select>
                </div>
                <div class="form-group form-inline">
                  <label for="quant">Quantity: </label>
                  <select name="pquant">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="purchprice">Price: </label>
                      <input type="price" name="pprice" class="form-control" id="purchprice" placeholder="Enter the price">
                  </div>
                  <div class="form-group form-inline">
                      <label for="ptotal">Total: </label>
                      <input type="price" name="ptotal" class="form-control" id="ptotal" placeholder="Enter the total costs">
                  </div>
                  <div class="form-group form-inline">
                      <label for="pdate">Date of Purchase: </label>
                      <input type="date" name="pdate" class="form-control" id="pdate" placeholder="Enter the date of purchase">
                  </div>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Save changes</button>
              </form>
            </div>
          </div>
         </div>
         <div class="modal-footer">

         </div>
       </div>
     </div>
   </div>
 
 
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-success">Manage Purchases</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SI</th>
              <th>Item Name</th>
              <th>Supplier Name</th>
              <th>Status</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
              <th>Date of Purchase</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>SI</th>
                  <th>Item Name</th>
                  <th>Supplier Name</th>
                  <th>Status</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th>Date of Purchase</th>
                  <th>Action</th>
                </tr>
          </tfoot>
          <tbody>
            @foreach ($purchases as $purchase)
            <tr>
                <td>{{$purchase->id}}</td>
                <td>{{$purchase->iname}}</td>
                <td>{{$purchase->supname}}</td>
                <td>{{$purchase->pstat}}</td>
                <td>{{$purchase->pquant}}</td>
                <td>{{$purchase->pprice}}</td>
                <td>{{$purchase->ptotal}}</td>
                <td>{{$purchase->pdate}}</td>
                <td><a  href="{{action('PurchasesController@edit', $purchase->id)}}" class="btn btn-warning fa fa-edit btn-sm"></a></td>
                <td>
                  <form action="{{action('PurchasesController@destroy', $purchase->id)}}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
                   </form>
                </td>
              </tr>      
            @endforeach
          </tbody>
        </table>
       </div>
     </div>
   </div>
 
  </div>   
@endsection