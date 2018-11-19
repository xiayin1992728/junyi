<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 构造函数
    public function __construct()
    {
        $this->middleware(function ($request, $next){
            // 未登录的处理
            $this->dosomething();
            return $next($request);
        });
    }

    public function dosomething()
    {
        if (!session()->has('user')) {
            redirect('login');
        }
    }

}
