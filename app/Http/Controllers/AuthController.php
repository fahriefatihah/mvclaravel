<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function reg()
    {
    	return view('register');
    }

    public function wel_post(Request $request)
    {
       $name = $request['fname']." ".$request['lname'];
       return view('welcome',["name"=>$name]);
    }
}