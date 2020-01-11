@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
        Add Supplier
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
           <h5 class="modal-title" id="exampleModalLabel">Manage Suppliers</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('suppliers.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Name: </label>
                  <input type="text" name="sname" class="form-control" id="user" placeholder="Supplier Name">
                </div>
              <div class="form-group form-inline">
                  <label for="email">Email: </label>
                  <input type="text" name="smail" class="form-control" id="email" placeholder="Supplier Email">
              </div>
              <div class="form-group form-inline">
                <label for="phone">Phone: </label>
                <input type="tel" name="sphone" class="form-control" id="phone" placeholder="Supplier Phone Number">
              </div>
              <div class="form-group form-inline">
                <label for="compName">Company: </label>
                <input type="text" name="compname" class="form-control" id="compName" placeholder="Company Name">
              </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select name="sstat">
                    <option>Active</option>
                    <option>Inactive</option>
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="adress">Adress: </label>
                      <input type="adress" name="sadress" class="form-control" id="adress" placeholder="Enter Adress">
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
       <h6 class="m-0 font-weight-bold">Manage Supplies</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SI</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Company</th>
              <th>Status</th>
              <th>Adress</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>SI</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Company</th>
                  <th>Status</th>
                  <th>Adress</th>
                  <th>Action</th>
                </tr>
          </tfoot>
          <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
            <td>{{$supplier->id}}</td>
            <td>{{$supplier->sname}}</td>
            <td>{{$supplier->smail}}</td>
            <td>{{$supplier->sphone}}</td>
            <td>{{$supplier->compname}}</td>
            <td>{{$supplier->sstat}}</td>
            <td>{{$supplier->sadress}}</td>
            <td><a  href="{{action('SuppliersController@edit',$supplier->id)}}" class="btn btn-warning fa fa-edit btn-sm"></a></td>
            <td><form action="{{action('SuppliersController@destroy',$supplier->id )}}" method="post">
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