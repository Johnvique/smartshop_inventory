@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
        Add Category
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
           <h5 class="modal-title" id="exampleModalLabel">Manage Categories</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-group form-inline">
                  <label for="catName">Category Name: </label>
                  <input type="username" name="Catname" class="form-control" id="catName" placeholder="Category Name">
                </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select>
                    <option>Active</option>
                    <option>Inactive</option>
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="details">Category Details: </label>
                      <select class="details" name="catrDetails" id="details">
                        <option>Sweeping</option>
                        <option>Sleeping</option>
                        <option>Eating</option>
                        <option>Coding</option>
                        <option>Playing</option>
                      </select>
                      
                  </div>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
            </div>
          </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-success">Save changes</button>
         </div>
       </div>
     </div>
   </div>
 
 
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-success">Transaction Categories</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SI</th>
              <th>Category Name</th>
              <th>Status</th>
              <th>Category Details</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>SI</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Category Details</th>
                  <th>Action</th>
                </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>01</td>
              <td>Cleaning</td>
              <td>Active,Inactive</td>
              <td>Securing Compounds</td>
              <td>View,Edit,Delete</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Sweeping</td>
                <td>Active,Inactive</td>
                <td>Picking Compounds</td>
                <td>View,Edit,Delete</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Eating</td>
                <td>Active,Inactive</td>
                <td>Clearing Compounds</td>
                <td>View,Edit,Delete</td>
            </tr>
            <tr>
                <td>04</td>
                <td>Digging</td>
                <td>Active,Inactive</td>
                <td>Keeping Compounds</td>
                <td>View,Edit,Delete</td>
              </tr>
          </tbody>
        </table>
       </div>
     </div>
   </div>
 
  </div>  
@endsection