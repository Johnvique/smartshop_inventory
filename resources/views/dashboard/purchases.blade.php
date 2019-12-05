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
           ...
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
       <h6 class="m-0 font-weight-bold text-success">Total Purchases Details</h6>
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
            <tr>
              <td>01</td>
              <td>Laptop</td>
              <td>Sheillah</td>
              <td>active,inactive</td>
              <td>29</td>
              <td>550.00</td>
              <td>580.50</td>
              <td>05/12/2019</td>
              <td>view,edit,delete</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Bread</td>
                <td>Joel</td>
                <td>active,inactive</td>
                <td>29</td>
                <td>550.00</td>
                <td>580.50</td>
                <td>15/11/2019</td>
                <td>view,edit,delete</td>
              </tr>
              <tr>
                  <td>03</td>
                  <td>Cups</td>
                  <td>Evian</td>
                  <td>active,inactive</td>
                  <td>29</td>
                  <td>550.00</td>
                  <td>580.50</td>
                  <td>29/11/2019</td>
                  <td>view,edit,delete</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Bed</td>
                    <td>Laban</td>
                    <td>active,inactive</td>
                    <td>29</td>
                    <td>550.00</td>
                    <td>580.50</td>
                    <td>02/12/2019</td>
                    <td>view,edit,delete</td>
                  </tr>
                  <tr>
                      <td>05</td>
                      <td>Chair</td>
                      <td>Glyn</td>
                      <td>active,inactive</td>
                      <td>29</td>
                      <td>550.00</td>
                      <td>580.50</td>
                      <td>04/12/2019</td>
                      <td>view,edit,delete</td>
                    </tr>
          </tbody>
        </table>
       </div>
     </div>
   </div>
 
  </div>   
@endsection