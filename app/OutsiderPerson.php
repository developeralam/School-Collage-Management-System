<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutsiderPerson extends Model
{
	protected $primaryKey = 'op_id';
    //
    static function opAll(){
    	$result = OutsiderPerson::all();
    	return $result;
    }
}
