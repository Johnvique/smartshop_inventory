@extends('layouts.main')
@section('main')
  
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <form action="{{route('products.update',$my_product->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                          <div class="form-group form-inline">
                            <label for="prodName">Name: </label>
                          <input type="text" name="prodname" value="{{$my_product->prodname}}" class="form-control" id="prodName" placeholder="Product Name">
                          </div>
                          <div class="form-group form-inline">
                            <label for="category">Category: </label>
                            <select name="catgy">
                              <option value="">{{$my_product->catgy}}</option>
                              <option>Sweeping</option>
                              <option>Picking</option>
                              <option>Security</option>
                              <option>Eating</option>
                            </select>
                          </div>
                            <div class="form-group form-inline">
                                <label for="supName">Supplier Name: </label>
                            <input type="text" name="supname" value="{{$my_product->supname}}"class="form-control" id="supName" placeholder="Enter Suppliers">
                            </div>
                            <div class="form-group form-inline">
                                <label for="cost">Cost Price: </label>
                                <input type="text" name="costprice" value="{{$my_product->costprice}}" class="form-control" id="cost" placeholder="Enter the costs">
                            </div>
                            <div class="form-group form-inline">
                                <label for="price">Price: </label>
                                <input type="text" name="pprice" value="{{$my_product->pprice}}" class="form-control" id="price" placeholder="Enter the price">
                            </div>
                            <div class="form-group form-inline">
                                <label for="unit">Unit: </label>
                                <select class="form-control" value="{{$my_product->unit}}" name="unit" id="unit">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                                
                            </div>
                            <div class="form-group form-inline">
                                <label for="image">Image: </label>
                                <input type="text"  name="image" value="{{$my_product->image}}" class="form-control" id="image" 
                                filenameformat="random" btntext="Browse" extensions="jpg,png,gif,jpeg" filesize="3" maximum="1" placeholder="Upload the Image Here">
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
        </div>
    </div>
</div>
 
@endsection