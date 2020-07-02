<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenceCategory extends Model
{
    //
    protected $primaryKey =  'expence_category_id';
    // protected $fillable = [
    // 	'expence_category', 'expence_cat_description',
    // ];
    static function all_cat(){
    	$al = ExpenceCategory::all();
    	return $al;
    }
}
