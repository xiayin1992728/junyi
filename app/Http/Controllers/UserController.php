<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function userPage ()
    {
    	$link = check_link(6,'user');
       if('user' == $link) {
          return view('user.user');
       }else {
         return redirect($link); 
       }
    }

    public function destroy()
    {
      Auth::guard('web')->logout();
      return redirect('/');
    }
}
