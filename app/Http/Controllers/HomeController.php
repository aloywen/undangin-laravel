<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Home'
        ];

        return view('frontend.homepage.home', $data);
    }

    public function tema() {
        $data = [
            'title' => 'Tema'
        ];

        return view('frontend.homepage.tema', $data);
    }

    public function harga() {
        $data = [
            'title' => 'Harga'
        ];

        return view('frontend.homepage.harga', $data);
    }

    public function portfolio() {
        $data = [
            'title' => 'Portfolio'
        ];

        return view('frontend.homepage.portfolio', $data);
    }
}
