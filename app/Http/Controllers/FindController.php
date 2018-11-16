<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
    public function findPage ()
    {
    	return view('find.find');
    }
}
