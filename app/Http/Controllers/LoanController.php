<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Money;
use App\Http\Requests\LoanRequest;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loanPage()
    {
      $link = check_link(0,'loan');
       if('loan' == $link) {
          return view('loan.loan');
       }else {
         return redirect($link); 
       }
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
