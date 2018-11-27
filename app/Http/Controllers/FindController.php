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
    	$link = check_link(5,'find');
       if('find' == $link) {
          return view('find.find');
       }else {
         return redirect($link); 
       }
    }
}
