<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function construct(){

        $this->middleware('guest');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {

    	$request->persist();


    	session()->flash('message','Muito Obrigado pelo seu registo. Por favor faça login com as suas credenciais.');


    	return redirect()->route('login');

    }

}
