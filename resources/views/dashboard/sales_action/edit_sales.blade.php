@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
            <form action="{{route('sales.update',$sale->id)}}" method="POST">
               @csrf
               @method('PUT')
                 <div class="form-group form-inline">
                   <label for="itemName">Item Name: </label>
                   <input type="text" name="itname" value="{{$sale->itname}}" class="form-control" id="itemName" placeholder="Item Name">
                 </div>
                 <div class="form-group form-inline">
                   <label for="cusName">Customer Name: </label>
                   <input type="text" name="cusname" value="{{$sale->cusname}}" class="form-control" id="cusName" placeholder="Supplier Name">
                 </div>
                 <div class="form-group form-inline">
                   <label for="status">Status: </label>
                   <select name="salstat">
                     <option value="{{$sale->salstat}}">{{$sale->salstat}}</option>
                   </select>
                 </div>
                 <div class="form-group form-inline">
                   <label for="quant">Quantity: </label>
                   <select name="salquant">
                     <option value="{{$sale->salquant}}">{{$sale->salquant}}</option>
                   </select>
                 </div>
                   <div class="form-group form-inline">
                       <label for="sprice">Price: </label>
                       <input type="text" name="salprice" value="{{$sale->salprice}}" class="form-control" id="sprice" placeholder="Enter the price">
                   </div>
                   <div class="form-group form-inline">
                       <label for="stotal">Total: </label>
                       <input type="text" name="saltotal" value="{{$sale->saltotal}}" class="form-control" id="stotal" placeholder="Enter the total costs">
                   </div>
                   <div class="form-group form-inline">
                       <label for="sdate">Date of Sales: </label>
                       <input type="date" name="saldate" value="{{$sale->saldate}}" class="form-control" id="sdate" placeholder="Enter the date of Sales">
                   </div>
                   <button type="submit" class="btn btn-success">Update</button>
               </form>
         </div>
      </div>
   </div> 
@endsection