@extends('layouts.main')
@section('main')
  
<div class="container-fluid">
   <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Products
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
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Manage Products</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-group form-inline">
                  <label for="prodName">Name: </label>
                  <input type="prodname" name="prodname" class="form-control" id="prodName" placeholder="Product Name">
                </div>
                <div class="form-group form-inline">
                  <label for="exampleFormControlSelect1">Category: </label>
                  <select>
                    <option>Cleaning</option>
                    <option>Sweeping</option>
                    <option>Picking</option>
                    <option>Security</option>
                    <option>Eating</option>
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="supName">Supplier Name: </label>
                      <input type="supname" name="supname" class="form-control" id="supName" placeholder="Enter Suppliers">
                  </div>
                  <div class="form-group form-inline">
                      <label for="cost">Cost Price: </label>
                      <input type="price" name="costPrice" class="form-control" id="cost" placeholder="Enter the costs">
                  </div>
                  <div class="form-group form-inline">
                      <label for="price">Price: </label>
                      <input type="price" name="price" class="form-control" id="price" placeholder="Enter the price">
                  </div>
                  <div class="form-group form-inline">
                      <label for="unit">Unit: </label>
                      <select class="form-control" class="unit" id="unit">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      
                  </div>
                  <div class="form-group form-inline">
                      <label for="image">Image: </label>
                      <input type="image" name="image" class="form-control" id="image" 
                      filenameformat="random" btntext="Browse" extensions="jpg,png,gif,jpeg" filesize="3" maximum="1" placeholder="Upload the Image Here">
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
      <h6 class="m-0 font-weight-bold text-success">Available Products</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SI</th>
              <th>Name</th>
              <th>Category</th>
              <th>Supplier Name</th>
              <th>Cost Price</th>
              <th>Price</th>
              <th>Unit</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>SI</th>
              <th>Name</th>
              <th>Category</th>
              <th>Supplier Name</th>
              <th>Cost Price</th>
              <th>Price</th>
              <th>Unit</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>01</td>
              <td>John Victor</td>
              <td>Cleaning Compound</td>
              <td>Programming Team</td>
              <td>1500.00</td>
              <td>1200.00</td>
              <td>18</td>
              <td>image</td>
              <td>view,edit,delete</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Merry Njeri</td>
                <td>Cleaning Compound</td>
                <td>Programming Team</td>
                <td>1500.00</td>
                <td>1200.00</td>
                <td>18</td>
                <td>image</td>
                <td>view,edit,delete</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Akello Christine</td>
                <td>Cleaning Compound</td>
                <td>Programming Team</td>
                <td>1500.00</td>
                <td>1200.00</td>
                <td>18</td>
                <td>image</td>
                <td>view,edit,delete</td>
            </tr>
            <tr>
                <td>04</td>
                <td>Otieno Odero</td>
                <td>Cleaning Compound</td>
                <td>Programming Team</td>
                <td>1500.00</td>
                <td>1200.00</td>
                <td>18</td>
                <td>image</td>
                <td>view,edit,delete</td>
            </tr>
            <tr>
                <td>05</td>
                <td>Sylvia Cecy</td>
                <td>Cleaning Compound</td>
                <td>Programming Team</td>
                <td>1500.00</td>
                <td>1200.00</td>
                <td>18</td>
                <td>image</td>
                <td>view,edit,delete</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

 </div>
 
@endsection