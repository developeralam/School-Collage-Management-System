<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //
    protected $primaryKey =  'exams_id';

    static function totalExam()
    {
    	$total = Exam::all();
    	$count = count($total);
    	return $count;
    }
    static function allExam(){
    	$total = Exam::all();
    	return $total;
    }
}
