<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('dashboard/products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products;
        $product->prodname=$request->get ('prodname');
        $product->catgy=$request->get ('catgy');
        $product->supname=$request->get ('supname');
        $product->costprice=$request->get ('costprice');
        $product->pprice=$request->get ('pprice');
        $product->unit=$request->get ('unit');
        $product->image=$request->get ('image');

        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products ,$id)
    {
        $my_product = Products::find($id);
        $categories = Category::all();
        return view('dashboard/products_action/edit_product',compact('my_product','categories'));
    }

    /**
     * Update the specified resource in storage.
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products,$id)
    {
        $products = Products::find($id);
        
        $products->update([
            'prodname'=>$request->prodname,
            'catgy'=>$request->catgy,
            'supname'=>$request->supname,
            'costprice'=>$request->costprice,
            'pprice'=>$request->pprice,
            'unit'=>$request->unit,
            'image'=>$request->image,

        ]);
        return redirect ('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products, $id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect('products');
    }
}
