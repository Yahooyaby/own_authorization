<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth')->group(function () {
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::get('/posts',[PostController::class,'index'])->name('index');
});

Route::middleware('guest')->group(function () {
    Route::get('/login',[UserController::class,'login'])->name('login');
    Route::post('/login',[UserController::class,'logging'])->name('logging');

});
Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/register',[UserController::class,'create'])->name('create');
Route::post('/register/store',[UserController::class,'store'])->name('store');



