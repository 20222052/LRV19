<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login', [AdminController::class, 'checklogin'])->name('login');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    //đăng xuất
   git
    
});