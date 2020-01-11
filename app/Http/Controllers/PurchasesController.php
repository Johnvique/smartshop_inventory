<?php

namespace App\Http\Controllers;

use App\Purchases;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases =Purchases::all();
        return view('dashboard/purchases', compact('purchases'));
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
        $purchase = new Purchases;
        $purchase->iname=$request->get ('iname');
        $purchase->supname=$request->get ('supname');
        $purchase->pstat=$request->get ('pstat');
        $purchase->pquant=$request->get ('pquant');
        $purchase->pprice=$request->get ('pprice');
        $purchase->ptotal=$request->get ('ptotal');
        $purchase->pdate=$request->get ('pdate');

        $purchase->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function show(Purchases $purchases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchases $purchases,$id)
    {
        $purchase= Purchases::find($id);
        return view('dashboard/purchase_action/edit_purchase', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchases $purchases,$id)
    {
        $purchase= Purchases::find($id);
        $purchase->update([
            'iname'=>$request->iname,
            'supname'=>$request->supname,
            'pstat'=>$request->pstat,
            'pquant'=>$request->pquant,
            'pprice'=>$request->pprice,
            'ptotal'=>$request->ptotal,
            'pdate'=>$request->pdate,
        ]);

        return redirect('purchases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchases $purchases,$id)
    {
        $purchases= Purchases::find($id);
        $purchases->delete();
        return redirect('purchases');
    }
}
