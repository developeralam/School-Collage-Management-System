<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parrent extends Model
{
    //
    protected $primaryKey =  'parrent_id';
    protected $fillable = [
    	'name', 'student_roll', 'image', 'status',
    ];
}
