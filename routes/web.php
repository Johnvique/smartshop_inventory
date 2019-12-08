<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function () {
Route::get('dashboard/index', 'DashboardController@index');
Route::get('dashboard/products','ProductsController@index');
Route::get('dashboard/category','CategoryController@index');
Route::get('dashboard/customers','CustomersController@index');
Route::get('dashboard/suppliers','SuppliersController@index');
Route::get('dashboard/employees','EmployeesController@index');
Route::get('dashboard/purchases','PurchasesController@index');
Route::get('dashboard/sales','SalesController@index');
Route::get('dashboard/accounts', 'AccountsController@index');
 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');
Route::resource('products', 'ProductsController');
Route::resource('people', 'PeopleController');
Route::resource('customers', 'CustomersController');
Route::resource('suppliers', 'SuppliersController');
Route::resource('employees', 'EmployeesController');
Route::resource('purchases', 'PurchasesController');
Route::resource('sales', 'SalesController');
Route::resource('accounts', 'AccountsController');
