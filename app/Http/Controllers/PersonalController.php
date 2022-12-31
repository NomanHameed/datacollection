<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $personal = Personal::create(['name' => $request->name,
            'father_name' => $request->father_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'doj' => $request->doj,
            'dob' => $request->dob,
            'department' => $request->department,
            'designation' => $request->designation,
            'currency' => $request->currency,
            'salary' => $request->salary,
            'location' => $request->location,
            'cnic' => $request->cnic,
            'employee_type' => $request->employee_type,
            'back_account' => $request->back_account,
            'back_account_name' => $request->back_account_name,
            'back_name' => $request->back_name,
            'ibn' => $request->ibn,
            'bank_address' => $request->bank_address,
        ]);
        if($personal){
            return redirect()->back()->with('status','Data Submitted Successfully');
        }
        return redirect()->back()->with('error','Somthing Wrongs');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
