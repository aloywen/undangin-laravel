<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Fitur;
use App\Models\Category;

class AdminController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Dashboard'
        ];

        return view('admin.dashboard', $data);
    }

    public function users() {
        $data = [
            'title' => 'Users',
            'users' => User::all()
        ];

        return view('admin.users', $data);
    }

    public function role() {
        $data = [
            'title' => 'Role',
            'data' => Role::all()
        ];

        return view('admin.role', $data);
    }

    public function category() {
        $data = [
            'title' => 'Category',
            'data' => Category::all()
        ];

        return view('admin.category', $data);
    }

    public function fitur() {
        $data = [
            'title' => 'Fitur',
            'data' => Fitur::all()
        ];

        return view('admin.fitur', $data);
    }
}
