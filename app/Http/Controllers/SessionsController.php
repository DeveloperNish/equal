<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SessionsController extends Controller
{

    public function __contruct(){
        $this->middleware('guest',['except' => 'destroy']);
    }

    public function create()
    {
        return view('public.index');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('public.login');
    }

    public function store()
    {
        //Attempt to authenticate the user 
        if(! auth()->attempt(request(['email','password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }
        //redirect the user
        return redirect()->route('app.dashboard');
    }
}
