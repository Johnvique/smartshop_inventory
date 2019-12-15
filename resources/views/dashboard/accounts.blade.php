@extends('layouts.main')
@section('main')
  
<div class="container-fluid">
   <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Account
  </button>
  <button type="button" class="btn btn-success">
      <i class="fa fa-file-excel" aria-hidden="true"></i>
    Export Excel
    </button>
    <button type="button" class="btn btn-success">
        <i class="fa fa-file-pdf" aria-hidden="true"></i>
      PDF
      </button>
      <button type="button" class="btn btn-success" onclick="PrintDiv()">
          <i class="fa fa-print" aria-hidden="true"></i>
        Print
        </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-lg bg-success text-white" id="exampleModalLabel">Manage Accounts</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('accounts.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="paydate">Payment Date: </label>
                  <input type="date" name="paydate" class="form-control" id="paydate" placeholder="">
                </div>
                <div class="form-group form-inline">
                    <label for="payfrom">Payment From: </label>
                    <input type="text" name="payfrom" class="form-control" id="payfrom" placeholder="">
                  </div>
                <div class="form-group form-inline">
                  <label for="category">Payment Type: </label>
                  <select name="paytype">
                    <option>Cash</option>
                    <option>Paypal</option>
                    <option>Mpesa</option>
                    <option>Smart Card</option>
                    <option>Bank</option>
                  </select>
                </div>
                <div class="form-group form-inline">
                    <label for="category">Payment Account: </label>
                    <select name="payaccount">
                      <option>Utility</option>
                      <option>Current</option>
                      <option>Service</option>
                    </select>
                  </div>
                  <div class="form-group form-inline">
                      <label for="amount">Amount Paid: </label>
                      <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter the amount paid">
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
      <h6 class="m-0 font-weight-bold text-success">Manage Products</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>SI</th>
                <th>Payment Date</th>
                <th>Payment From</th>
                <th>Payment Type</th>
                <th>Payment Account</th>
                <th>Amount Paid</th>
                <th>Action</th>
              </tr>
          </thead>
          <tfoot>
            <tr>
              <th>SI</th>
              <th>Payment Date</th>
              <th>Payment From</th>
              <th>Payment Type</th>
              <th>Payment Account</th>
              <th>Amount Paid</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($accounts as $account)
            <tr>
                <td>{{$account->id}}</td>
                <td>{{$account->paydate}}</td>
                <td>{{$account->payfrom}}</td>
                <td>{{$account->paytype}}</td>
                <td>{{$account->payaccount}}</td>
                <td>{{$account->amount}}</td>
                <td>
                    <a  href="" class="btn btn-info fa fa-eye btn-sm"></a>
                    <a  href="" class="btn btn-warning fa fa-edit btn-sm"></a>
                    <a  href="" class="btn btn-danger fa fa-trash-alt btn-sm"></a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

 </div>
 
@endsection