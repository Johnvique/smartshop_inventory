@extends('layouts.main')
@section('main')
   <div class="container-fluid">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
              <form class="user" action="{{route('setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="name" name="business_name" value="{{$setting->business_name}}" class="form-control form-control-user" id="exampleFirstName" placeholder="Business Name">
                        </div>
                        <div class="col-sm-6">
                          <input type="address" name="box_address" value="{{$setting->box_address}}" class="form-control form-control-user" id="exampleAddress" placeholder="Box Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="location" name="location" value="{{$setting->location}}" class="form-control form-control-user" id="exampleInputLoation" placeholder="Location">
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="vision" name="vision" value="{{$setting->vision}}" class="form-control form-control-user" id="exampleInputVision" placeholder="Vision">
                        </div>
                        <div class="col-sm-6">
                          <input type="file" name="logo" value="{{$setting->logo}}" class="form-control form-control-user" id="exampleInputLogo"  placeholder="Upload the Image Here"
                          onchange="return imageval()">
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
