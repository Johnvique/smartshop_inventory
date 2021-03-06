<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;
use App\Customers;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales =Sales::all();
        $customers = Customers::orderBy('id','Desc')->get();
        return view('dashboard/sales', compact('sales','customers'));
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
        $sale = new Sales;
        $sale->itname=$request->get ('itname');
        $sale->cusname=$request->get ('cusname');
        $sale->salstat=$request->get ('salstat');
        $sale->salquant=$request->get ('salquant');
        $sale->salprice=$request->get ('salprice');
        $sale->saltotal=$request->get ('saltotal');
        $sale->saldate=$request->get ('saldate');

        $sale->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales,$id)
    {
        $sale= Sales::find($id);
        return view('dashboard/sales_action/edit_sales',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales,$id)
    {
        $sale= Sales::find($id);
        $sale->update([
            'itname'=>$request->itname,
            'cusname'=>$request->cusname,
            'salstat'=>$request->salstat,
            'salquant'=>$request->salquant,
            'salprice'=>$request->salprice,
            'saltotal'=>$request->saltotal,
            'saldate'=>$request->saldate,
        ]);

        return redirect('sales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales,$id)
    {
        $sale= Sales::find($id);
        $sale->delete();

        return redirect('sales');
    }
}
