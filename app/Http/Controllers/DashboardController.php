<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Employees;
use App\Customers;
use App\Suppliers;
class DashboardController extends Controller
{
    public function index(){
        $product_count = Products::count();
        $employees_count = Employees::count();
        $customers_count = Customers::count();
        $suppliers_count = Suppliers::count();
        return view('dashboard/index',compact('product_count','employees_count',
        'customers_count','suppliers_count'));
    }

}
