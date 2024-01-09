<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\CategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => 'guest'],function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/auth', [LoginController::class, 'auth']);
    Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
    Route::get('/regist', [LoginController::class, 'regist']);
    Route::post('/regist', [LoginController::class, 'registPost'])->name('register');
    Route::get('/forgotpassword', [LoginController::class, 'forgotpassword']);
    
// });

Route::controller(AdminController::class)->group(function () {
    Route::get('/panel/dashboard','index');
    Route::get('/panel/role', 'role');
    Route::get('/panel/category', 'category');
    Route::get('/panel/fitur', 'fitur');
    Route::get('/panel/users', 'users');
});

// role
Route::controller(RoleController::class)->group(function () {
    Route::post('/panel/role', 'store')->name('roleStore');
    Route::post('/panel/updaterole/{id}', 'update')->name('roleUpdate');
    Route::get('/panel/deleterole/{id}', 'delete')->name('deleteStore');
});

// category
Route::controller(CategoryController::class)->group(function(){
    Route::post('/panel/category', 'store')->name('categoryStore');
    Route::post('/panel/updatecategory/{id}', 'update')->name('categoryUpdate');
    Route::get('/panel/deletecategory/{id}','delete')->name('categoryDelete');
});

//fitur
Route::controller(FiturController::class)->group(function () {
    Route::post('/panel/fitur', 'store')->name('fiturStore');
    Route::post('/panel/updatefitur/{id}', 'update')->name('fiturUpdate');
    Route::get('/panel/deletefitur/{id}', 'delete')->name('fiturDelete');
});

// users
Route::controller(UserController::class)->group(function () {
    Route::post('/panel/user', 'store')->name('userStore');
    Route::post('/panel/updateuser/{id}', 'update')->name('userUpdate');
    Route::get('/panel/deleteuser/{id}', 'delete')->name('userDelete');
});