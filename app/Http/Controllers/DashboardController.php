<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Employees;
use App\Customers;
use App\Suppliers;
use App\Sales;
use App\Accounts;
use App\Purchases;
use App\Category;
class DashboardController extends Controller
{
    public function index(){
        $product_count = Products::count();
        $employees_count = Employees::count();
        $customers_count = Customers::count();
        $suppliers_count = Suppliers::count();
        $sales_count = Sales::count();
        $account_count = Accounts::count();
        $purchase_count = Purchases::count();
        $category_count = Category::count();
        return view('dashboard/index',compact('product_count','employees_count',
        'customers_count','suppliers_count','sales_count','account_count','purchase_count',
        'category_count'));
    }

}
