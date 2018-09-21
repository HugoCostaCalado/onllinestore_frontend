<?php

namespace App;

use App\Model;

class Package extends Model
{
	public function user()
	{

		return belongsTo('App\User');
		
	}

	public function packagestates()
	{

		return $this->belongsTo('App\PackageStates');

	}

    public function products()
    {

    	return $this->hasMany('App\Product');

    }

}
