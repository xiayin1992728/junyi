<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function featurePage ()
    {
    	$link = check_link(2,'feature');

       if('feature' == $link) {
          return view('feature.feature');
       }else {
         return redirect($link); 
       }
    }
}
