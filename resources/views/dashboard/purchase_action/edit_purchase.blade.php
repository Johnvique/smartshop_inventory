@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
            <form action="{{route('purchases.update', $purchase->id)}}" method="POST">
               @csrf
               @method('PUT')
                 <div class="form-group form-inline">
                   <label for="itemName">Item Name: </label>
                   <input type="text" name="iname" value="{{$purchase->iname}}" class="form-control" id="itemName" placeholder="Item Name">
                 </div>
                 <div class="form-group form-inline">
                   <label for="supName">Supplier Name: </label>
                   <input type="text" name="supname" value="{{$purchase->supname}}" class="form-control" id="supName" placeholder="Supplier Name">
                 </div>
                 <div class="form-group form-inline">
                   <label for="status">Status: </label>
                   <select name="pstat">
                     <option value="{{$purchase->pstat}}">{{$purchase->pstat}}</option>
                   </select>
                 </div>
                 <div class="form-group form-inline">
                   <label for="quant">Quantity: </label>
                   <select name="pquant">
                     <option value="{{$purchase->pquant}}">{{$purchase->pquant}}</option>
                   </select>
                 </div>
                   <div class="form-group form-inline">
                       <label for="purchprice">Price: </label>
                       <input type="price" name="pprice" value="{{$purchase->pprice}}" class="form-control" id="purchprice" placeholder="Enter the price">
                   </div>
                   <div class="form-group form-inline">
                       <label for="ptotal">Total: </label>
                       <input type="price" name="ptotal" value="{{$purchase->ptotal}}" class="form-control" id="ptotal" placeholder="Enter the total costs">
                   </div>
                   <div class="form-group form-inline">
                       <label for="pdate">Date of Purchase: </label>
                       <input type="date" name="pdate" value="{{$purchase->pdate}}" class="form-control" id="pdate" placeholder="Enter the date of purchase">
                   </div>
                   <button type="submit" class="btn btn-success">Update</button>
               </form>
         </div>
      </div>
   </div> 
@endsection