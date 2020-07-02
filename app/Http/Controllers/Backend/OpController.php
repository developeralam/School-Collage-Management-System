<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OutsiderPerson;

class OpController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $op = new OutsiderPerson;
        $op->op_name = $request->op_name;
        $op->op_phone = $request->op_phone;
        $op->op_address = $request->op_address;
        $op->op_description = $request->op_description;
        $op->save();
        session()->flash('success', 'Outsider Person Inserted Successfully');
        return redirect()->route('admin.others');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $ops = OutsiderPerson::all();
        return view('backend.others.oplist', compact('ops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $op = OutsiderPerson::find($id);
        return view('backend.others.opedit', compact('op'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $op = OutsiderPerson::find($id);
        $op->op_name = $request->op_name;
        $op->op_phone = $request->op_phone;
        $op->op_address = $request->op_address;
        $op->op_description = $request->op_description;
        $op->save();
        session()->flash('success', 'Outsider Person Updated Successfully');
        return redirect()->route('admin.others.list.outsider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $op = OutsiderPerson::find($id);
        $op->delete();
        session()->flash('success', 'Outsider Person Deleted Successfully');
        return redirect()->route('admin.others.list.outsider');
    }
}
