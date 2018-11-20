<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\loginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    // 创建用户
    protected function add ($user,$request)
    {
        $user->phone = $request->phone;
        $user->password = bcrypt($request->phone);

        $user->save();

        return $user;
    }

    // 用户登录
    public function store (loginRequest $request,User $user)
    {
        // 如果用户不存在创建用户
        $res = $user::where('phone',$request->phone)->first();
        if (!$res) {
            $user = $this->add($user,$request);
        } else {
            $user = $res;
        }

        if (Auth::attempt(['phone' => $request->phone,'password' => $request->phone])) {
            return redirect('loan');
        }
    }
}
