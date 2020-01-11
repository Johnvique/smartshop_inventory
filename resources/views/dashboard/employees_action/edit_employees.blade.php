@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
            <form action="{{route('employees.update',$employee->id)}}" method="POST">
               @csrf
               @method('PUT')
                 <div class="form-group form-inline">
                   <label for="user">Employee Name: </label>
                   <input type="text" name="ename" value="{{$employee->ename}}" class="form-control" id="user" placeholder="Employee Name">
                 </div>
               <div class="form-group form-inline">
                   <label for="email">Employee Email: </label>
                   <input type="text" name="eemail" value="{{$employee->eemail}}" class="form-control" id="email" placeholder="Employee Email">
               </div>
               <div class="form-group form-inline">
                 <label for="phone">Employee Phone: </label>
                 <input type="tel" name="ephone" value="{{$employee->ephone}}" class="form-control" id="phone" placeholder="Employee Phone Number">
               </div>
             <div class="form-group form-inline">
                 <label for="adress">Adress: </label>
                 <input type="text" name="eadress" value="{{$employee->eadress}}" class="form-control" id="adress" placeholder="Enter Adress">
             </div>
                 <div class="form-group form-inline">
                   <label for="status">Status: </label>
                   <select name="estat">
                     <option value="{{$employee->estat}}">{{$employee->estat}}</option>
                   </select>
                 </div>
                 <button type="submit" class="btn btn-success">Update</button>
               </form>  
         </div>
      </div>
   </div> 
@endsection