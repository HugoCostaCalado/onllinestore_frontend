<?php

namespace App;

use App\Model;

class PackageStates extends Model
{
    public function package()
    {
    	return hasMany('App\Package');
    }
}
