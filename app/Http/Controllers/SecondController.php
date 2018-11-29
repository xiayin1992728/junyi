<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SecondController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function secondPage (Product $product)
    {
    	$link = check_link(4,'second');
       if('second' == $link) {
          $products = $product->get();
          return view('second.second',compact('products'));
       }else {
         return redirect($link); 
       }
    }
}
