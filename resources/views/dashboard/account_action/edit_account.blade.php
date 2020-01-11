@extends('layouts.main')
@section('main')
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
            <form action="{{route('accounts.update',$account->id)}}" method="POST">
               @csrf
               @method('PUT')
                 <div class="form-group form-inline">
                   <label for="paydate">Payment Date: </label>
                   <input type="date" name="paydate" value="{{$account->paydate}}" class="form-control" id="paydate" placeholder="">
                 </div>
                 <div class="form-group form-inline">
                     <label for="payfrom">Payment From: </label>
                     <input type="text" name="payfrom" value="{{$account->payfrom}}" class="form-control" id="payfrom" placeholder="">
                   </div>
                 <div class="form-group form-inline">
                   <label for="category">Payment Type: </label>
                   <select name="paytype">
                     <option value="{{$account->paytype}}">{{$account->paytype}}</option>
                   </select>
                 </div>
                 <div class="form-group form-inline">
                     <label for="category">Payment Account: </label>
                     <select name="payaccount">
                       <option value="{{$account->payaccount}}">{{$account->payaccount}}</option>
                     </select>
                   </div>
                   <div class="form-group form-inline">
                       <label for="amount">Amount Paid: </label>
                       <input type="text" name="amount" value="{{$account->amount}}" class="form-control" id="amount" placeholder="Enter the amount paid">
                   </div>
                   <button type="submit" class="btn btn-success">Update</button>
               </form>
         </div>
      </div>
   </div> 
@endsection