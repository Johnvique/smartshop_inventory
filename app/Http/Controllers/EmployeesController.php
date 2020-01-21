<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees =Employees::all();
        return view('dashboard/employees', compact('employees'));
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



        $employees = new Employees;
        $employees->ename=$request->get ('ename');
        $employees->eemail=$request->get ('eemail');
        $employees->ephone=$request->get ('ephone');
        $employees->eadress=$request->get ('eadress');
        $employees->estat=$request->get ('estat');
        $employees->image = $fileNameToStore;

        $employees->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employees::find($id);
        return view('dashboard/employees_action/edit_employees',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees,$id)
    {
        $employees=Employees::find($id);
        $employees->update([
            'enmae'=>$request->ename,
            'eemail'=>$request->eemail,
            'ephone'=>$request->ephone,
            'eadress'=>$request->eadress,
            'estat'=>$request->estat,
        ]);

        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees,$id)
    {
        $employees=Employees::find($id);
        $employees->delete();
        return redirect('employees');
    }
}
