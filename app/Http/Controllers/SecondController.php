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
    	$link = check_link(4,'second');
       if('second' == $link) {
          return view('second.second');
       }else {
         return redirect($link); 
       }
    }
}
