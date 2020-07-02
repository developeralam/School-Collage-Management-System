<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ImportantPerson;

class IpController extends Controller
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
            $ip = new ImportantPerson;
            $ip->ip_name = $request->ip_name;
            $ip->ip_phone = $request->ip_phone;
            $ip->ip_address = $request->ip_address;
            $ip->ip_position = $request->ip_position;
            $ip->ip_description = $request->ip_description;
            $ip->save();
            session()->flash('success', 'Important Person Added Successfully');
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
        $ips =ImportantPerson::all();
        return view('backend.others.iplist', compact('ips'));

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
        $ip = ImportantPerson::find($id);
        return view('backend.others.ipedit', compact('ip'));
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
        $ip = ImportantPerson::find($id);
        $ip->ip_name = $request->ip_name;
        $ip->ip_phone = $request->ip_phone;
        $ip->ip_address = $request->ip_address;
        $ip->ip_position = $request->ip_position;
        $ip->ip_description = $request->ip_description;
        $ip->save();
        session()->flash('success', 'Important Person Updated Successfully');
        return redirect()->route('admin.others.list.important');
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
        $ip = ImportantPerson::find($id);
        $ip->delete();
        session()->flash('delete', 'Important Person Deleted Successfully');
        return redirect()->route('admin.others.list.important');
    }
}
