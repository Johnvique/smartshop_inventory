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
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group form-inline">
                  <label for="prodName">Name: </label>
                  <input type="prodname" name="prodname" class="form-control" id="prodName" placeholder="Product Name">
                </div>
                <div class="form-group form-inline">
                  <label for="category">Category: </label>
                  <select name="category" required class="form-control">
                    <option value="" selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->catrname}}">{{$category->catrname}}</option>
                        
                    @endforeach
                    
                  </select>
                </div>
                  <div class="form-group form-inline">
                      <label for="supName">Supplier Name: </label>
                      <select name="supname" required class="form-control">
                        <option value="" selected disabled>Select Supplier</option>
                        @foreach ($suppliers as $supplier)
                        <option value="{{$supplier->sname}}">{{$supplier->sname}}</option>
                            
                        @endforeach
                        
                      </select>
                  </div>
                  <div class="form-group form-inline">
                      <label for="cost">Cost Price: </label>
                      <input type="text" name="costprice" class="form-control" id="cost" placeholder="Enter the costs">
                  </div>
                  <div class="form-group form-inline">
                      <label for="unit">Unit: </label>
                      <input type="number" name="unit" class="form-control" id="unit">   
                  </div>
                  <div class="form-group form-inline">
                      <label for="tprice">Total Price: </label>
                      <input type="text" name="tprice" class="form-control" id="tprice" placeholder="Enter the price">
                  </div>
                  <div class="form-group form-inline">
                      <label for="image">Image: </label>
                      <input type="file" name="image" class="form-control" id="image"  placeholder="Upload the Image Here"
                       onchange="return imageval()">
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
              <th>Unit</th>
              <th>Total Price</th>
              <th>Image</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>SI</th>
              <th>Name</th>
              <th>Category</th>
              <th>Supplier Name</th>
              <th>Cost Price</th>
              <th>Unit</th>
              <th>Total Price</th>
              <th>Image</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->prodname}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->supname}}</td>
                <td>{{$product->costprice}}</td>
                <td>{{$product->unit}}</td>
                <td>{{$product->tprice}}</td>
                <td><img class="img-responsive" style="width:50px" src="{{asset('img/'.$product->image)}}"/></td>
            <td><a href="{{action('ProductsController@edit', $product->id)}}" class="btn btn-warning fa fa-edit btn-sm"></a></td>
                <td>
                  <form action="{{action('ProductsController@destroy',$product->id)}}" method="POST">
                    @csrf
                    <input type="hidden"  name="_method" value="DELETE">
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