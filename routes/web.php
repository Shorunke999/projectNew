<?php

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


Route::middleware('custom_middleware')->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\Controller::class,'Dashboard'])->name('dash');
    Route::post('/uploadProfilePics',[\App\Http\Controllers\Controller::class,'save_pics_path'])->name('pics');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Register',[\App\Http\Controllers\Controller::class,'getRegister']);
Route::post('/Register',[\App\Http\Controllers\Controller::class,'Register'])->name('register');
Route::get('/login',[\App\Http\Controllers\Controller::class,'getLogin'])->name('login');
Route::post('/loginpost',[\App\Http\Controllers\Controller::class,'Login'])->name('loginpost');
