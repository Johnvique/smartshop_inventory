@extends('layouts.main')
@section('main')
  
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                          <div class="form-group form-inline">
                            <label for="prodName">Name: </label>
                          <input type="text" name="prodname" value="{{$product->prodname}}" class="form-control" id="prodName" placeholder="Product Name">
                          </div>
                          <div class="form-group form-inline">
                            <label for="category">Category: </label>
                            <select name="category">
                              <option value="{{$product->category}}">{{$product->category}}</option>
                            </select>
                          </div>
                            <div class="form-group form-inline">
                                <label for="supName">Supplier Name: </label>
                            <input type="text" name="supname" value="{{$product->supname}}"class="form-control" id="supName" placeholder="Enter Suppliers" required>
                            </div>
                            <div class="form-group form-inline">
                                <label for="cost">Cost Price: </label>
                                <input type="text" name="costprice" value="{{$product->costprice}}" class="form-control" id="cost" placeholder="Enter the costs">
                            </div>
                            <div class="form-group form-inline">
                                <label for="unit">Unit: </label>
                                <select class="form-control" value="{{$product->unit}}" name="unit" id="unit">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                                
                            </div>
                            <div class="form-group form-inline">
                                <label for="tprice">Total Price: </label>
                                <input type="text" name="tprice" value="{{$product->tprice}}" class="form-control" id="tprice" placeholder="Enter the price">
                            </div>
                            <div class="form-group form-inline">
                                <label for="image">Image: </label>
                                <input type="file"  name="image" value="{{$product->image}}" class="form-control" id="image"  placeholder="Upload the Image Here" onchange="return imageval()">
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
        </div>
    </div>
</div>
 
@endsection