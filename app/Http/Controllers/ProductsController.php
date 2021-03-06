<?php

namespace App\Http\Controllers;
use File;
use App\Products;
use Illuminate\Http\Request;
use App\Category;
use App\Suppliers;
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
        $categories = Category::orderBy('id','Desc')->get();
        $suppliers = Suppliers::orderBy('id', 'Desc')->get();
        return view('dashboard/products',compact('products','categories','suppliers'));
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
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move(public_path('img'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }


        $product= new Products;
        $product->prodname=$request->get('prodname');
        $product->category=$request->get('category');
        $product->supname=$request->get('supname');
        $product->costprice=$request->get('costprice');
        $product->unit=$request->get('unit');
        $product->tprice=$request->get('tprice');
        $product->image = $fileNameToStore;

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
        $product = Products::find($id);
        return view('dashboard/Products_action/edit_product',compact('product'));
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
        $product = Products::find($id);
        
        $product->update([
            'prodname'=>$request->prodname,
            'category'=>$request->category,
            'supname'=>$request->supname,
            'costprice'=>$request->costprice,
            'unit'=>$request->unit,
            'tprice'=>$request->tprice,
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
        file::delete('img/.$product->image');
        $product->delete();
        return redirect('products');
    }
}
