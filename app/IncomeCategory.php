<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeCategory extends Model
{
    //
    protected $primaryKey =  'income_category_id';
    protected $fillable = [
    	'income_category', 'income_cat_description',
    ];

}
