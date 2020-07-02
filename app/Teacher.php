<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $primaryKey =  'teachers_id';
    protected $fillable = [
    	
    ];

    static function totalTeacher()
    {
    	$total = Teacher::all();
    	$count = count($total);
    	return $count;
    }
    static function total()
    {
        $total = Teacher::all();
        return $total;
    }
}
