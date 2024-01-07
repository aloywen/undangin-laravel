<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth() {
        $data = [
            'title' => 'Dashboard'
        ];

        return view('frontend.auth', $data);
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
