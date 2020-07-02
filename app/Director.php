<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
    protected $primaryKey =  'directors_id';

    static function totalDirector()
    {
    	$total = Director::all();
    	$count = count($total);
    	return $count;
    }
    static function chairmanQuote(){
    	$result = Director::orderBy('directors_id', 'desc')->where('directors_status', 1)->first();
        if (isset($result)) {
            return $result->directors_quote;
        }
    }
    static function dirAmount(){
        $total = Director::all();
        $amount = 0;
        foreach ($total as $key) {
            $amount += $key->directors_dipogit;
        }
        return $amount;
    }
    static function alldirList(){
        $all = Director::all();
        return $all;
    }
}
