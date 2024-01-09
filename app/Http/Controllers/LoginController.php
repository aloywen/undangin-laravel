<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth() {
        $data = [
            'title' => 'Login'
        ];

        return view('frontend.auth', $data);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            // return redirect()->intended('dashboard');
            return redirect()->intented($this->redirectPath('/panel/dashboard'));
        }

        return back()->with('loginError', 'Email atau password salah!');
        
    }

    public function regist() {
        $data = [
            'title' => 'Register'
        ];

        return view('frontend.regist', $data);
    }

    public function registPost(Request $request) {
        dd($request->all());
    }

    public function forgotpassword() {
        $data = [
            'title' => 'Forgot Password'
        ];

        return view('frontend.forgotpassword', $data);
    }
}
