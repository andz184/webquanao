<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function loginAdmin(){
   
        return view('login');
    }
    public function postloginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {
            return redirect()->to('/home');
        } else {
            dd('đăng nhập thất bại');
        }
    }
    

}

