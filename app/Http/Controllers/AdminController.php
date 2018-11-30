<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin()
    {

        return view('admin.login');
    }

    public function adminStore(Admin $admin,Request $request)
    {
        $this->validate($request,[
            'phone' => 'required',
            'password' => 'required'
        ]);

        Auth::guard('admin')->attempt(['phone' => $request->phone,'password' => $request->password]);

        return redirect('admin');
    }

    public function destroy()
    {
        
        Auth::guard('admin')->logout();
        return redirect('login');
    }
}
