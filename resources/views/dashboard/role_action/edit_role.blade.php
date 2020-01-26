@extends('layouts.main')
@section('main')
   <div class="container-fluid">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form class="user" action="{{route('role.update', $role->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="name" name="role_name" value="{{$role->role_name}}" class="form-control form-control-user" id="exampleName" placeholder="Role Title">
                          </div>
                          <div class="col-sm-6">
                            <input type="name" name="display_name" value="{{$role->display_name}}" class="form-control form-control-user" id="exampleName" placeholder="Display Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="textarea" name="description" value="{{$role->description}}" class="form-control form-control-user" id="exampleInputDescription" placeholder="Role Description">
                        </div>
                        </div>
                        <button class="btn btn-info btn-user btn-block">Update</button>
                    </form>
            </div>
         </div>
    </div>
    <div class="col-md-4">

    </div>
   </div> 
@endsection
