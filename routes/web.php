<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => 'guest'],function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/auth', [AuthController::class, 'auth']);
    Route::get('/regist', [AuthController::class, 'regist']);
    Route::post('/regist', [AuthController::class, 'registPost'])->name('register');
    Route::get('/forgotpassword', [AuthController::class, 'forgotpassword']);
    
// });

Route::get('/panel/dashboard', [AdminController::class, 'index']);
Route::get('/panel/role', [AdminController::class, 'role']);
Route::post('/panel/role', [RoleController::class, 'store'])->name('roleStore');
Route::post('/panel/updaterole/{id}', [RoleController::class, 'update'])->name('roleUpdate');
Route::get('/panel/deleterole/{id}', [RoleController::class, 'delete'])->name('deleteStore');
Route::get('/panel/category', [AdminController::class, 'category']);
Route::get('/panel/fitur', [AdminController::class, 'fitur']);
Route::get('/panel/users', [AdminController::class, 'users']);