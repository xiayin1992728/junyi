<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\VerifyRequest;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function verifyPage ()
    {
    	return view('verify.verify');
    }

    public function store(VerifyRequest $request)
    {
        $user = User::where('id',session('user')->id)->first();
    	$user->name = $request->name;
    	$user->idcard = $request->idcard;
    	$user->credit = $request->credit;
    	$user->qq = $request->qq;
    	$user->weixin = $request->weixin;

        $user->work = $request->work ?? 0;
        $user->house = $request->house ?? 0;
        $user->card = $request->card ?? 0;
        $user->accumulation = $request->accumulation ?? 0;
        $user->insurance = $request->insurance ?? 0; 

    	$user->save();

    	return redirect('feature');
    }
}
