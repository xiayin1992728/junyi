<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function loginPage()
    {

    	return view('login.login');
    }
}
