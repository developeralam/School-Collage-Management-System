<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey =  'students_id';
    //
    protected $fillable=[

    	
    ];
    static function className()
    {
    	return $this->hasOne('App\studentClass');
    }
    static function totalStu()
    {
    	$total = Student::all();
    	$count = count($total);
    	return $count;
    }
}
