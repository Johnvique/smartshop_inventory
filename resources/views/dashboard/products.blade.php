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
          <h5 class="modal-title bg-lg bg-success text-white" id="exampleModalLabel">Manage Products</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('products.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="prodName">Name: </label>
                  <input type="prodname" name="prodname" class="form-control" id="prodName" placeholder="Product Name">
                </div>
                <div class="form-group form-inline">
                  <label for="category">Category: </label>
                  <select name="catgy">
                    <option value="">Cleaning</option>
                    <option>Sweeping</option>
                    <option>Picking</option>
                    <option>Security</option>
                    <option>Eating</option>
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="supName">Supplier Name: </label>
                      <input type="text" name="supname" class="form-control" id="supName" placeholder="Enter Suppliers">
                  </div>
                  <div class="form-group form-inline">
                      <label for="cost">Cost Price: </label>
                      <input type="text" name="costprice" class="form-control" id="cost" placeholder="Enter the costs">
                  </div>
                  <div class="form-group form-inline">
                      <label for="price">Price: </label>
                      <input type="text" name="pprice" class="form-control" id="price" placeholder="Enter the price">
                  </div>
                  <div class="form-group form-inline">
                      <label for="unit">Unit: </label>
                      <select class="form-control" name="unit" id="unit">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      
                  </div>
                  <div class="form-group form-inline">
                      <label for="image">Image: </label>
                      <input type="text" name="image" class="form-control" id="image" 
                      filenameformat="random" btntext="Browse" extensions="jpg,png,gif,jpeg" filesize="3" maximum="1" placeholder="Upload the Image Here">
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
    <h6 class="m-0 font-weight-bold text-success">Manage Products</h6>
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
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->prodname}}</td>
                <td>{{$product->catgy}}</td>
                <td>{{$product->supname}}</td>
                <td>{{$product->costprice}}</td>
                <td>{{$product->pprice}}</td>
                <td>{{$product->unit}}</td>
                <td>{{$product->image}}</td>
                <td>
                  <a  href="" class="btn btn-info fa fa-eye btn-sm"></a>
                  <a  href="{{action('ProductsController@edit', $product['id'])}}" class="btn btn-warning fa fa-edit btn-sm"></a>
                  <a  href="" class="btn btn-danger fa fa-trash-alt btn-sm"></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

 </div>
 
@endsection