<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinueController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function continuePage ()
    {
    	$link = check_link(3,'continue');
       if('continue' == $link) {
          return view('continue.continue');
       }else {
         return redirect($link); 
       }
    }
}
