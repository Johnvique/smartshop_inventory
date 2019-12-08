@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Employee
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
           <h5 class="modal-title" id="exampleModalLabel">Manage Employees</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('employees.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Employee Name: </label>
                  <input type="text" name="ename" class="form-control" id="user" placeholder="Employee Name">
                </div>
              <div class="form-group form-inline">
                  <label for="email">Employee Email: </label>
                  <input type="text" name="eemail" class="form-control" id="email" placeholder="Employee Email">
              </div>
              <div class="form-group form-inline">
                <label for="phone">Employee Phone: </label>
                <input type="tel" name="ephone" class="form-control" id="phone" placeholder="Employee Phone Number">
              </div>
            <div class="form-group form-inline">
                <label for="adress">Adress: </label>
                <input type="text" name="eadress" class="form-control" id="adress" placeholder="Enter Adress">
            </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select name="estat">
                    <option>Active</option>
                    <option>Inactive</option>
                  </select>
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
       <h6 class="m-0 font-weight-bold text-success">Manage Employees</h6>
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
              <th>Adress</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>SI</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Adress</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
          </tfoot>
          <tbody>
            @foreach ($employees as $employee)
            <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->ename}}</td>
            <td>{{$employee->eemail}}</td>
            <td>{{$employee->ephone}}</td>
            <td>{{$employee->eadress}}</td>
            <td>{{$employee->estat}}</td>
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