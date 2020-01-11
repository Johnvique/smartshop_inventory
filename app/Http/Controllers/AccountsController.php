<?php

namespace App\Http\Controllers;

use App\Accounts;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts =Accounts::all();
        return view('dashboard/accounts', compact('accounts'));
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
        $account = new Accounts;
        $account ->paydate =$request->get ('paydate');
        $account ->payfrom =$request->get ('payfrom');
        $account ->paytype =$request->get ('paytype');
        $account ->payaccount =$request->get ('payaccount');
        $account ->amount =$request->get ('amount');

        $account->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(Accounts $accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(Accounts $accounts,$id)
    {
        $account= Accounts::find($id);
        return view('dashboard/account_action/edit_account',compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accounts $accounts,$id)
    {
        $account= Accounts::find($id);
        $account->update([
            'paydate'=>$request->paydate,
            'payfrom'=>$request->payfrom,
            'paytype'=>$request->paytype,
            'payaccount'=>$request->payaccount,
            'amount'=>$request->amount,
        ]);

        return redirect('accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accounts $accounts,$id)
    {
        $account= Accounts::find($id);
        $account->delete();

        return redirect('accounts');
    }
}
