<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view("public.register");
    }

    public function store()
    {
        //validate the form
        $this->validate(request(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        //create and save the user
        $user = User::create(request(['firstname','lastname','email','password']));

        //Sign in the user
        auth()->login($user);

        //Redirect to dashboard
        return redirect()->route('app.dashboard');
    }


}
