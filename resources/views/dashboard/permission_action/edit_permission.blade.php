@extends('layouts.main')
@section('main')
   <div class="container-fluid">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form class="user" action="{{route('permission.update', $permission->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="name" name="permission_name" value="{{$permission->permission_name}}" class="form-control form-control-user" id="exampleName" placeholder="Permission Title">
                          </div>
                          <div class="col-sm-6">
                            <input type="name" name="display_name" value="{{$permission->display_name}}" class="form-control form-control-user" id="exampleName" placeholder="Display Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="textarea" name="description" value="{{$permission->description}}" class="form-control form-control-user" id="exampleInputDescription" placeholder="Permission Description">
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
