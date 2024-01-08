<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\CategoryController;


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
// role
Route::get('/panel/role', [AdminController::class, 'role']);
Route::post('/panel/role', [RoleController::class, 'store'])->name('roleStore');
Route::post('/panel/updaterole/{id}', [RoleController::class, 'update'])->name('roleUpdate');
Route::get('/panel/deleterole/{id}', [RoleController::class, 'delete'])->name('deleteStore');

// category
Route::get('/panel/category', [AdminController::class, 'category']);
Route::post('/panel/category', [CategoryController::class, 'store'])->name('categoryStore');
Route::post('/panel/updatecategory/{id}', [CategoryController::class, 'update'])->name('categoryUpdate');
Route::get('/panel/deletecategory/{id}', [CategoryController::class, 'delete'])->name('categoryDelete');

//fitur
Route::get('/panel/fitur', [AdminController::class, 'fitur']);
Route::post('/panel/fitur', [FiturController::class, 'store'])->name('fiturStore');
Route::post('/panel/updatefitur/{id}', [FiturController::class, 'update'])->name('fiturUpdate');
Route::get('/panel/deletefitur/{id}', [FiturController::class, 'delete'])->name('fiturDelete');

// users
Route::get('/panel/users', [AdminController::class, 'users']);
Route::post('/panel/user', [UserController::class, 'store'])->name('userStore');
Route::post('/panel/updateuser/{id}', [UserController::class, 'update'])->name('userUpdate');
Route::get('/panel/deleteuser/{id}', [UserController::class, 'delete'])->name('userDelete');