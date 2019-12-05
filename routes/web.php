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
    Route::get('dashboard/index', function () {
        return view('dashboard/index');
});
Route::get('dashboard/products', function () {
    return view('dashboard/products');
});
Route::any('dashboard/customers', function () {
   return view('dashboard/customers'); 
});
Route::any('dashboard/suppliers', function () {
    return view('dashboard/suppliers'); 
 });
 Route::any('dashboard/employees', function () {
    return view('dashboard/employees'); 
 });
 Route::any('dashboard/category', function () {
    return view('dashboard/category'); 
 });
 Route::any('dashboard/purchases', function () {
    return view('dashboard/purchases'); 
 });
 Route::any('dashboard/sales', function () {
    return view('dashboard/sales'); 
 });
 
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
