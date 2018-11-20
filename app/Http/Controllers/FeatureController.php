<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function featurePage ()
    {
    	return view('feature.feature');
    }
}
