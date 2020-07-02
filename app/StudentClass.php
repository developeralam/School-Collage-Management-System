<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    //
    protected $primaryKey =  'classes_id';

    static function totalClass()
    {
    	$total = StudentClass::all();
    	$count = count($total);
    	return $count;
    }
    static function allClass(){
    	$total = StudentClass::all();
    	return $total;
    }
}
