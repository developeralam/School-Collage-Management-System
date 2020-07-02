<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Expence;
use App\ExpenceCategory;
use DB;

class ExpenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $expences = DB::table('expences')
                    ->join('expence_categories', 'expences.expence_category_id', '=', 'expence_categories.expence_category_id')
                    ->select('expences.*', 'expence_categories.*')
                    ->get();
        return view('backend.expence.index', compact('expences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ExpenceCategory::all();
        return view('backend.expence.create', compact('categories'));
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
        $expence = new Expence();
        $expence->expence_category_id = $request->expence_cat;
        $expence->expence_amount = $request->amount;
        $expence->expence_type = 'expence';
        $expence->expence_date = $request->expence_date;
        $expence->expences_description = $request->expence_desc;
        $expence->bank_withdraw = 0;
        $expence->save();
        session()->flash('success', 'Expence Added Successfully');
        return redirect()->route('admin.expence');
    }

    //Bank Withdraw
    public function withdraw(Request $request)
    {
        //
        $expence = new Expence();
        $expence->expence_category_id = $request->expence_cat;
        $expence->expence_amount = 0;
        $expence->expence_type = 'expence';
        $expence->expence_date = $request->expence_date;
        $expence->expences_description = $request->expence_desc;
        $expence->bank_withdraw = $request->amount;
        $expence->status = 1;
        $expence->save();
        session()->flash('success', 'Bank Withdraw Successfully');
        return redirect()->route('admin.balance');
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
        $ex = Expence::find($id);
        $ex->delete();
        session()->flash('success', 'Expence Deleted Successfully');
        return redirect()->route('admin.expence');
    }
    public function month_filter($year, $month)
    {
        //
        $date = $year.'-'.$month;
        $expence = DB::table('expences')
                    ->join('expence_categories', 'expences.expence_category_id', '=', 'expence_categories.expence_category_id')

                    ->where('expence_date', 'LIKE', "%{$date}%")
                    ->select('expences.*', 'expence_categories.*')

                    ->get();
        return $expence;
    }
    
}
