<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;

class SessionController extends Controller
{
	// 加载申请页面
    public function loginPage ()
    {

    	return view('login.login');
    }

    // 创建用户
    protected function store ($user,$request)
    {
    	$user->phone = $request->phone;

    	$user->save();

    	return $user;
    }

    // 用户登录
    public function login (loginRequest $request,User $user)
    {
    	// 如果用户不存在创建用户
        $res = $user::where('phone',$request->phone)->first();
		if (!$res) {
			$user = $this->store($user,$request);
		} else {
		    $user = $res;
        }

		// 保存用户登录状态
        session(['user' => $user]);

		// 用户存在跳转到借款页面
		return redirect('loan');
    }
}
