<?php

namespace App\Http\Controllers;

use File;
use App\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers =Suppliers::all();
        return view('dashboard/suppliers', compact('suppliers'));
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



        $supplier = new Suppliers;
        $supplier->sname=$request->get ('sname');
        $supplier->smail=$request->get ('smail');
        $supplier->sphone=$request->get ('sphone');
        $supplier->compname=$request->get ('compname');
        $supplier->sstat=$request->get ('sstat');
        $supplier->sadress=$request->get ('sadress');
        $supplier->image = $fileNameToStore;

        $supplier->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit(Suppliers $suppliers,$id)
    {
        $supplier= Suppliers::find($id);
        $suppliers=Suppliers::all();
        return view('dashboard/suppliers_action/edit_suppliers',compact('supplier','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppliers $suppliers,$id)
    {
        $supplier=Suppliers::find($id);
        $supplier->update([
            'sname'=>$request->sname,
            'smail'=>$request->smail,
            'sphone'=>$request->sphone,
            'compname'=>$request->compname,
            'sstat'=>$request->sstat,
            'sadress'=>$request->sadress,
        ]);
        return redirect('suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suppliers $suppliers,$id)
    {
        $supplier= Suppliers::find($id);
        file::delete('img/'.$supplier->image);
        $supplier->delete();
        return redirect('suppliers');
    }
}
