<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stud extends Model
{
     public $fillable = [
    	'roll',
    	'name',
    	'address',
    	'mail',
    	'phone'
    ];
}
