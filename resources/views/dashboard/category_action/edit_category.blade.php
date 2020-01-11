@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
         <form action="{{route('category.update',$my_category['id'])}}" method="POST">
          <input type="hidden" name="id" value="{{$my_category->id}}" />
                     @csrf
                     @method('PUT')
                       <div class="form-group form-inline">
                         <label for="catName">Category Name: </label>
                       <input type="text" name="catrname" value="{{$my_category->cartname}}" class="form-control" id="catName" placeholder="Category Name">
                       </div>
                       <div class="form-group form-inline">
                         <label for="status">Status: </label>
                         <select name="stat">
                          @foreach ($categories as $category)
                         <option>{{$category->stat}}</option>  
                          @endforeach
                         </select>
                       </div>
                         <div class="form-group form-inline">
                             <label for="details">Category Details: </label>
                             <select class="details" name="catrdetails" id="details">
                               @foreach ($categories as $category)
                             <option>{{$category->catrdetails}}</option>   
                               @endforeach
                             </select>
                             
                         </div>
                         <button type="submit" class="btn btn-success">Update</button>
                     </form>
         </div>
      </div>
   </div> 
@endsection