<?php

namespace App\Http\Requests;

use App\User;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //dd(request()->all());

        return [


            'name' => 'required',

            'password' => 'required|Confirmed',

            'email' => 'required|E-Mail',

            'address' => 'required',

            'zipcode' => 'required',//|regex: /[0-9]{4}-[0-9]{3}

            'city' => 'required',

            'telephone' => 'required|integer',

            'cellphone' => 'required|integer'
            
        ];
    }

    public function persist()
    {    // dd(request('address'));  // dd(request()->all());
        $user = User::create([

            'name' => request('name'),

            'password' => bcrypt( request('password') ),

            'email' => request('email'),

            'address' => request('address'),

            'zipcode' => request('zipcode'),

            'city' => request('city'),

            'telephone' => request('telephone'),

            'cellphone' => request('cellphone')

        ]);

        // \Mail::to($user)->send(new Welcome($user));
    }
}
