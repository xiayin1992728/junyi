<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinueController extends Controller
{
    public function continuePage ()
    {
    	return view('continue.continue');
    }
}
