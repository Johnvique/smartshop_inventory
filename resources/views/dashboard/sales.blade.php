@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Sales
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
           <h5 class="modal-title" id="exampleModalLabel">Manage Sales</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('sales.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="itemName">Item Name: </label>
                  <input type="text" name="itname" class="form-control" id="itemName" placeholder="Item Name">
                </div>
                <div class="form-group form-inline">
                  <label for="cusName">Customer Name: </label>
                  <input type="text" name="cusname" class="form-control" id="cusName" placeholder="Supplier Name">
                </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select name="salstat">
                    <option>Active</option>
                    <option>inactive</option>
                  </select>
                </div>
                <div class="form-group form-inline">
                  <label for="quant">Quantity: </label>
                  <select name="salquant">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="sprice">Price: </label>
                      <input type="text" name="salprice" class="form-control" id="sprice" placeholder="Enter the price">
                  </div>
                  <div class="form-group form-inline">
                      <label for="stotal">Total: </label>
                      <input type="text" name="saltotal" class="form-control" id="stotal" placeholder="Enter the total costs">
                  </div>
                  <div class="form-group form-inline">
                      <label for="sdate">Date of Sales: </label>
                      <input type="date" name="saldate" class="form-control" id="sdate" placeholder="Enter the date of Sales">
                  </div>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
            </div>
          </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
           <button type="button" class="btn btn-success">Save changes</button>
         </div>
       </div>
     </div>
   </div>
 
 
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-success">Manage Sales</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SI</th>
              <th>Item Name</th>
              <th>Customer Name</th>
              <th>Status</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
              <th>Date of Sales</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>SI</th>
                  <th>Item Name</th>
                  <th>Customer Name</th>
                  <th>Status</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th>Date of Sales</th>
                  <th>Action</th>
                </tr>
          </tfoot>
          <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{$sale->id}}</td>
                <td>{{$sale->itname}}</td>
                <td>{{$sale->cusname}}</td>
                <td>{{$sale->salstat}}</td>
                <td>{{$sale->salquant}}</td>
                <td>{{$sale->salprice}}</td>
                <td>{{$sale->saltotal}}</td>
                <td>{{$sale->saldate}}</td>
                <td>view,edit,delete</td>
              </tr>     
            @endforeach
          </tbody>
        </table>
       </div>
     </div>
   </div>
 
  </div>   
@endsection