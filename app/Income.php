<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    //
    protected $primaryKey =  'income_id';

    static function income(){
    	$all = Income::all();
    	$total = 0;
    	foreach ($all as $key) {
    		$total += $key->income_amount;
    	}
    	return $total;
		
    }
    static function total_bank_dipogit(){
        $income = Income::all();
        $total = 0;
        foreach($income as $value){
            $total +=$value->bank_income_amount;
        }
        return $total;
    }
}
