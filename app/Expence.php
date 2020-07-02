<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ExpenceCategory;
use DB;

class Expence extends Model
{
    //
    protected $primaryKey =  'expence_id';

    static function expence()
    {
    	$all = Expence::all();

    	$total = 0;
    	foreach ($all as $key) {
    		$total += $key->expence_amount;
    	}
    	return $total;
    }

    static function total_withdraw(){
        $ex = Expence::all();
        $total =0;
        foreach ($ex as $value) {
            $total += $value->bank_withdraw; 
        }
        return $total;
    }

    static function allcate(){
        $expence = DB::table('expences')
                ->join('expence_categories', 'expences.expence_category_id', 'expence_categories.expence_category_id')
                ->select('expences.*, expence_categories.*');
        return $expence;
    }
    static function adminExpence(){
        $ex = Expence::where('expence_category_id', 3)->get();
        return $ex;
    }
    static function sallaryExpence(){
        $ex = Expence::where('expence_category_id', 4)->get();
        return $ex;
    }
    static function otherExpence(){
        $ex = Expence::whereNotIn('expence_category_id', [3,4])->get();
        return $ex;
    }

}
