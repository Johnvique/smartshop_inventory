@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-handshake" aria-hidden="true"></i>
        Manage Roles
        </button>
   </button>
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Give user a Role</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form class="user" action="{{route('role.store')}}" method="POST">
                @csrf
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="name" name="role_name" class="form-control form-control-user" id="exampleName" placeholder="Role Title">
                      </div>
                      <div class="col-sm-6">
                        <input type="name" name="display_name" class="form-control form-control-user" id="exampleName" placeholder="Display Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="textarea" name="description" class="form-control form-control-user" id="exampleInputDescription" placeholder="Role Description">
                    </div>
                    </div>
                    <button class="btn btn-success btn-user btn-block">Submit</button>
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
      <h6 class="m-0 font-weight-bold text-success">Manage User Roles</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Display name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Display name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($roles as $role)
            <tr>
            <td>{{$role->id}}</td>
                <td>{{$role->role_name}}</td>
                <td>{{$role->display_name}}</td>
                <td>{{$role->description}}</td>
                <td><a  href="{{action('RoleController@edit',$role->id)}}" class="btn btn-primary fa fa-edit btn-sm"></a></td>
                <td><form action="{{action('RoleController@destroy',$role->id )}}" method="post">
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