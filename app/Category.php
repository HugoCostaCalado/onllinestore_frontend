<?php

namespace App;

use App\Model;

class Category extends Model
{
	
    public function products()
    {
    	return $this->hasMany('App\Product');
    }

}
