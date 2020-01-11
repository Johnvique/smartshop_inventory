@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
            <form action="{{route('customers.update',$customers->id)}}" method="POST">
               @csrf
               @method('PUT')
                 <div class="form-group form-inline">
                   <label for="user">Customer Name: </label>
                 <input type="text" name="cname" value="{{$customers->cname}}" class="form-control" id="user" placeholder="Customer Name">
                 </div>
               <div class="form-group form-inline">
                   <label for="email">Customer Email: </label>
                   <input type="text" name="cmail" value="{{$customers->cmail}}" class="form-control" id="email" placeholder="Customer Email">
               </div>
               <div class="form-group form-inline">
                 <label for="phone">Customer Phone: </label>
                 <input type="tel" name="cphone" value="{{$customers->cphone}}" class="form-control" id="phone" placeholder="Customer Phone Number">
               </div>
                 <div class="form-group form-inline">
                   <label for="status">Status: </label>
                   <select name="status">
                     <option>Active</option>
                     <option>Inactive</option>
                   </select>
                 </div>
                   <div class="form-group form-inline">
                       <label for="adress">Adress: </label>
                       <input type="text" name="cadress" value="{{$customers->cadress}}" class="form-control" id="adress" placeholder="Enter Adress">
                   </div>
                   <button type="submit" class="btn btn-success">Update</button>
               </form>
         </div>
      </div>
   </div> 
@endsection