<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
    	if(! auth()->attempt($request->only('email','password')))
    	{
    		return back()->withErrors([

    			'message'=>'Please check your credentials'

    		]);
    	}


    	return redirect()->home();
    }
}
