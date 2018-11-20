<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function findPage ()
    {
    	return view('find.find');
    }
}
