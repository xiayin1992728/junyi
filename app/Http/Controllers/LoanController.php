<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loanPage()
    {
    	return view('loan.loan');
    }
}
