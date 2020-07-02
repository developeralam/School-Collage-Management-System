<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Income;
use App\IncomeCategory;
use App\Student;
use DB;
class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $date = '2';
        $incomes = DB::table('incomes')
                    ->join('students', 'incomes.student_id', '=', 'students.student_roll')
                    ->join('income_categories', 'incomes.income_cat_id', '=', 'income_categories.income_category_id')

                    ->where('income_date', 'LIKE', "%{$date}%")
                    ->select('incomes.*', 'students.student_roll', 'income_categories.*')

                    ->get();
        return view('backend.income.index', compact('incomes'));
    }

    public function month_filter($year, $month)
    {
        //
        $date = $year.'-'.$month;
        $incomes = DB::table('incomes')
                    ->join('students', 'incomes.student_id', '=', 'students.student_roll')
                    ->join('income_categories', 'incomes.income_cat_id', '=', 'income_categories.income_category_id')

                    ->where('income_date', 'LIKE', "%{$date}%")
                    ->select('incomes.*', 'students.student_roll', 'income_categories.*')

                    ->get();
        return $incomes;
    }

    public function roll_filter($roll)
    {
        //
        $incomes = DB::table('incomes')
                    ->join('students', 'incomes.student_id', '=', 'students.student_roll')
                    ->join('income_categories', 'incomes.income_cat_id', '=', 'income_categories.income_category_id')

                    ->where('student_id', 'LIKE', "%{$roll}%")
                    ->select('incomes.*', 'students.student_roll', 'income_categories.*')

                    ->get();
        return $incomes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = IncomeCategory::all();
        return view('backend.income.create', compact('categories'));
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
        $income = new Income;
        $income->income_cat_id = $request->income_cat;
        $income->income_amount =  $request->income_amount;
        $income->payment_month = $request->payment_month;
        $income->income_description = $request->income_desc;
        $income->income_date = $request->income_date;
        $income->student_id = $request->student_id;
        $income->status = 0;
        $income->save();
        session()->flash('success', 'Dipogit Added Successfully');
        return redirect()->route('admin.income');
    }

    public function store_bank(Request $request)
    {
        //
        $income = new Income;
        $income->income_cat_id = 1;
        $income->income_amount =  0;
        $income->payment_month = 1;
        $income->income_description = $request->income_desc;
        $income->income_date = $request->income_date;
        $income->student_id = 0;
        $income->bank_income_amount = $request->income_amount;
        $income->status = 1;
        $income->save();
        session()->flash('success', 'Bank Dipogit Added Successfully');
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
        $del = Income::find($id);
        $del->delete();
        session()->flash('success', 'Dipogit Deleted Successfully');
        return back();
    }
}
