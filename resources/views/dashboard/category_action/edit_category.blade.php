@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
               <form action="" method="POST">
                     @csrf
                       <div class="form-group form-inline">
                         <label for="catName">Category Name: </label>
                       <input type="text" name="catrname" value="{{$my_category->cartname}}" class="form-control" id="catName" placeholder="Category Name">
                       </div>
                       <div class="form-group form-inline">
                         <label for="status">Status: </label>
                         <select name="stat">
                           <option>Active</option>
                           <option>Inactive</option>
                         </select>
                       </div>
                         <div class="form-group form-inline">
                             <label for="details">Category Details: </label>
                             <select class="details" name="catrdetails" id="details">
                               <option>Sweeping</option>
                               <option>Sleeping</option>
                               <option>Eating</option>
                               <option>Coding</option>
                               <option>Playing</option>
                             </select>
                             
                         </div>
                         <button type="submit" class="btn btn-success">Update</button>
                     </form>
         </div>
      </div>
   </div> 
@endsection