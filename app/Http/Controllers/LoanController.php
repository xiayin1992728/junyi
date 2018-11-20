<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Money;
use App\Http\Requests\LoanRequest;
use Illuminate\Http\Request;

class LoanController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

    public function loanPage()
    {
    	return view('loan.loan');
    }

    // 申请借款
    public function store(Money $money,LoanRequest $request)
    {
       $money->days = $request->days;
       $money->money = $request->money;
       $money->uid = Auth::id();

       $money->save();

       return redirect('verify');
    }

}
