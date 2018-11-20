<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function secondPage ()
    {
    	return view('second.second');
    }
}
