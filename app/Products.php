<?php

namespace App;

use App\Model;

class Product extends Model
{
	
	public function category(){

    	return $this->belongsTo('App\Category');

    }

    public function packages()
    {
    	return $this->hasMany('App\Package');
    }

}
