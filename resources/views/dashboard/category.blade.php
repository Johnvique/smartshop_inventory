@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
        Add Category
        </button>
        <button type="button" class="btn btn-success">
            <i class="fa fa-file-excel" aria-hidden="true"></i>
          Export Excel
          </button>
          <button type="button" class="btn btn-success">
              <i class="fa fa-file-pdf" aria-hidden="true"></i>
            PDF
            </button>
   </button>
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Manage Categories</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('category.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="catName">Category Name: </label>
                  <input type="text" name="catrname" class="form-control" id="catName" placeholder="Category Name">
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
       <h6 class="m-0 font-weight-bold text-success">Manage Categories</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SI</th>
              <th>Category Name</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
              <tr>
                <th>SI</th>
                <th>Category Name</th>
                <th>Update</th>
                <th>Delete</th>
                </tr>
          </tfoot>
          <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->catrname}}</td>
                <td><a  href="{{action('CategoryController@edit', $category->id)}}" class="btn btn-warning fa fa-edit btn-sm"></a></td>
                <td><form action="{{action('CategoryController@destroy', $category->id )}}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
                   </form></td>
              </tr>      
            @endforeach
          </tbody>
        </table>
       </div>
     </div>
   </div>
 
  </div>  
@endsection