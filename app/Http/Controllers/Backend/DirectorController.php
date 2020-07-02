<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Director;
use File;
use Image;
class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $directors = Director::all();
        return view('backend.director.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.director.create');
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
        $director = new Director;
        $director->directors_name = $request->name;
        $director->derectors_phone = $request->phone;
        $director->directors_email = $request->email;
        $director->directors_dipogit = $request->dipogit;
        $director->directors_quote = $request->directors_quote;
        $director->directors_status = $request->status;
        // $image = $request->directors_image;
        // $img = time().'.'.$image->getClientOriginalExtension();
        // Image::make($image)->save($location);
        // $location = public_path('dirImage/'.$img);
        // $director->directors_imgae = $img;
        $director->save();
        session()->flash('success', 'Director Created Successfully');
        return redirect()->route('admin.director');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $dirs = Director::find($id);
        return view('backend.director.edit', compact('dirs'));
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

        $director = Director::find($id);
        $director->directors_name = $request->name;
        $director->derectors_phone = $request->phone;
        $director->directors_email = $request->email;
        $director->directors_dipogit = $request->dipogit;
        $director->directors_quote = $request->directors_quote;
        $director->directors_status = $request->status;
        // $image = $request->directors_image;
        // $img = time().'.'.$image->getClientOriginalExtension();
        // Image::make($image)->save($location);
        // $location = public_path('dirImage/'.$img);
        // $director->directors_imgae = $img;
        $director->save();
        session()->flash('success', 'Director Updated Successfully');
        return redirect()->route('admin.director');

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
        $dir = Director::find($id);
        $dir->delete();
        session()->flash('success', 'Director Deleted Successfully');
        return redirect()->back();
    }
}
