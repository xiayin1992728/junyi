<?php

namespace App\Http\Controllers;

use App\Models\Money;
use App\Http\Requests\LoanRequest;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loanPage()
    {
    	return view('loan.loan');
    }

    // 申请借款
    public function store(Money $money,LoanRequest $request)
    {
       $money->days = $request->days;
       $money->money = $request->money;
       $money->uid = session('user')->id;

       $money->save();

       return redirect('verify');
    }

}
