<?php

namespace App\Http\Controllers;

use Auth;
use Overtrue\EasySms\EasySms;
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
        $verifyData = \Cache::get($key);
        if (!$verifyData) {
            return response(['errors' => '验证码过期']);
        }

        if (!hash_equals($verifyData['code'], $request->verification_code)) {
            return response(['errors' => '验证码错误']);
        }

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


    public function message(EasySms $easySms,Request $request)
    {
     $this->validate($request,[
        //'captcha' => 'required|captcha',
        'phone' => [
            'required',
            'regex:/^((13[0-9])|(14[5,7,9])|(15[^4])|(18[0-9])|(17[0,1,3,5,6,7,8]))\d{8}$/'
        ]
    ]);

     $phone = $request->phone;

     if (!app()->environment('production')) {
        $code = '1234';
    } else {
     $code = str_pad(random_int(1,9999),4,0,STR_PAD_LEFT);
     try {
        $result = $easySms->send($phone,[
            'template' => env('CAPTCHA_MESSAGE'), 
            'data' => [
                'code' => $code
            ],  
        ]);
    } catch(\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
        $message = $exception->getException('aliyun')->getMessage();
        return response(['errors' => $message ?? '短信发送异常']);
    }
}

$key = 'verificationCode_'.str_random(15);
$expireAt = now()->addMinutes(5);
       // 缓存验证码 5 分钟过期
\Cache::put($key,['phone' => $phone,'code' => $code],$expireAt);

return response(['key' => $key,'expired_at' => $expireAt->toDateTimeString()]);
}
}
