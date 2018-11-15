<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verifyPage ()
    {
    	return view('verify.verify');
    }
}
