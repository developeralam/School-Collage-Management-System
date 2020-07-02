<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $primaryKey =  'subject_id';
    protected $fillable = [
    	'name',
    ];

    static function totalSubject()
    {
    	$total = Subject::all();
    	$count = count($total);
    	return $count;
    }
    //Get all subject
    static function subjects(){
        $subjects = Subject::all();
        return $subjects;
    }
}
