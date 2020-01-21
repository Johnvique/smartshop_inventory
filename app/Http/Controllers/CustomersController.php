<?php

namespace App\Http\Controllers;

use File;
use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        return view('dashboard/customers',compact('customers'));
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



        $customer = new Customers;
        $customer->cname=$request->get ('cname');
        $customer->cmail=$request->get ('cmail');
        $customer->cphone=$request->get ('cphone');
        $customer->status=$request->get ('status');
        $customer->cadress=$request->get ('cadress');
        $customer->image = $fileNameToStore;

        $customer->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers,$id)
    {
        $customers = Customers::find($id);
        return view('dashboard/customers_action/edit_customers',compact('customers')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers,$id)
    {
        $customer=Customers::find($id);
        $customer->update([
            'cname'=>$request->cname,
            'cmail'=>$request->cmail,
            'cphone'=>$request->cphone,
            'status'=>$request->status,
            'cadress'=>$request->cadress,

        ]);

        return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers,$id)
    {
        $customer= Customers::find($id);
        File::delete('img/'.$customer->image);
        $customer->delete();
        return redirect('customers');
    }
}
