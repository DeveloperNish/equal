<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
        $this->middleware('guest');
     }

     public function index() {
         return view('public.index');
     }

     public function register() {
         return view('public.register');
     }
}
