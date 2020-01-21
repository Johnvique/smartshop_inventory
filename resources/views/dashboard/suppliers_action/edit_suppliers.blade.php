@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
            <form action="{{route('suppliers.update',$supplier->id)}}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
                 <div class="form-group form-inline">
                   <label for="user">Name: </label>
                   <input type="text" name="sname" value="{{$supplier->sname}}" class="form-control" id="user" placeholder="Supplier Name">
                 </div>
               <div class="form-group form-inline">
                   <label for="email">Email: </label>
                   <input type="text" name="smail" value="{{$supplier->smail}}" class="form-control" id="email" placeholder="Supplier Email">
               </div>
               <div class="form-group form-inline">
                 <label for="phone">Phone: </label>
                 <input type="tel" name="sphone" value="{{$supplier->sphone}}" class="form-control" id="phone" placeholder="Supplier Phone Number">
               </div>
               <div class="form-group form-inline">
                 <label for="compName">Company: </label>
                 <input type="text" name="compname" value="{{$supplier->compname}}" class="form-control" id="compName" placeholder="Company Name">
               </div>
                 <div class="form-group form-inline">
                   <label for="status">Status: </label>
                   <select name="sstat">
                     @foreach ($suppliers as $supplier)
                     <option value="{{$supplier->sstat}}">{{$supplier->sstat}}</option>  
                     @endforeach
                   </select>
                 </div>
                   <div class="form-group form-inline">
                       <label for="adress">Adress: </label>
                       <input type="adress" name="sadress" value="{{$supplier->sadress}}" class="form-control" id="adress" placeholder="Enter Adress">
                   </div>
                   <div class="form-group form-inline">
                    <label for="image">Image: </label>
                    <input type="file" name="image" value="{{$supplier->image}}" class="form-control" id="image"  placeholder="Upload the Image Here"
                     onchange="return imageval()">
                   </div>
                   <button type="submit" class="btn btn-success">Update</button>
               </form>
         </div>
      </div>
   </div> 
@endsection