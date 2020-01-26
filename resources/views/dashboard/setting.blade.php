@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-cog" aria-hidden="true"></i>
        System Settings
        </button>
   </button>
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Change Settings</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form class="user" action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="name" name="business_name" class="form-control form-control-user" id="exampleFirstName" placeholder="Business Name">
                      </div>
                      <div class="col-sm-6">
                        <input type="address" name="box_address" class="form-control form-control-user" id="exampleAddress" placeholder="Box Address">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="location" name="location" class="form-control form-control-user" id="exampleInputLoation" placeholder="Location">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="vision" name="vision" class="form-control form-control-user" id="exampleInputVision" placeholder="Vision">
                      </div>
                      <div class="col-sm-6">
                        <input type="file" name="logo" class="form-control form-control-user" id="exampleInputLogo"  placeholder="Upload the Image Here"
                        onchange="return imageval()">
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
      <h6 class="m-0 font-weight-bold text-success">Manage System Settings</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Business Name</th>
              <th>Box Address</th>
              <th>Location</th>
              <th>Vision</th>
              <th>Logo</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>ID</th>
                <th>Business Name</th>
                <th>Box Address</th>
                <th>Location</th>
                <th>Vision</th>
                <th>Logo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($settings as $setting)
            <tr>
            <td>{{$setting->id}}</td>
              <td>{{$setting->business_name}}</td>
              <td>{{$setting->box_address}}</td>
              <td>{{$setting->location}}</td>
              <td>{{$setting->vision}}</td>
              <td><img class="img-responsive" style="width:50px" src="{{asset('img/'.$setting->logo)}}"/></td>
              <td><a  href="{{action('SettingController@edit',$setting->id)}}" class="btn btn-primary fa fa-edit btn-sm"></a></td>
              <td><form action="{{action('SettingController@destroy',$setting->id )}}" method="post">
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