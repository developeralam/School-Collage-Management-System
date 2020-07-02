<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportantPerson extends Model
{
	protected $primaryKey = 'ip_id';
    //

   	static function ipAll(){
   		$result = ImportantPerson::all();
   		return $result;
   	}
}
