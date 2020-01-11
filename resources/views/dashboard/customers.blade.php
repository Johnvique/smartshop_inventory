@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
        Add Customer
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
           <h5 class="modal-title" id="exampleModalLabel">Manage Customers</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('customers.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Customer Name: </label>
                  <input type="text" name="cname" class="form-control" id="user" placeholder="Customer Name">
                </div>
              <div class="form-group form-inline">
                  <label for="email">Customer Email: </label>
                  <input type="text" name="cmail" class="form-control" id="email" placeholder="Customer Email">
              </div>
              <div class="form-group form-inline">
                <label for="phone">Customer Phone: </label>
                <input type="tel" name="cphone" class="form-control" id="phone" placeholder="Customer Phone Number">
              </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select name="status">
                    <option>Active</option>
                    <option>Inactive</option>
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="adress">Adress: </label>
                      <input type="text" name="cadress" class="form-control" id="adress" placeholder="Enter Adress">
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
       <h6 class="m-0 font-weight-bold text-success">Manage Customers</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SI</th>
              <th>Customer Name</th>
              <th>Customer Email</th>
              <th>Customer Phone</th>
              <th>Status</th>
              <th>Customer Adress</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>SI</th>
              <th>Customer Name</th>
              <th>Customer Email</th>
              <th>Customer Phone</th>
              <th>Status</th>
              <th>Customer Adress</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($customers as $customer)
            <tr>
            <td>{{$customer->id}}</td>
                <td>{{$customer->cname}}</td>
                <td>{{$customer->cmail}}</td>
                <td>{{$customer->cphone}}</td>
                <td>{{$customer->status}}</td>
                <td>{{$customer->cadress}}</td>
            <td><a  href="{{action('CustomersController@edit',$customer->id)}}" class="btn btn-warning fa fa-edit btn-sm"></a></td>
                <td><form action="{{action('CustomersController@destroy',$customer->id )}}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
                   </form></td>
              </tr>    
            @endforeach
          </tbody>
        </table>
       </div>
     </div>
   </div>
 
  </div>   
@endsection