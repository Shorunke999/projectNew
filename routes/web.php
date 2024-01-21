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



# project_new
to activate or send email, we need to restart worker with 
project_new>php artisan queue:restart[enter]
and
>>php artisan queue:work [enter]...starting worker to dipacth email
this is done to reduce the runtime of the web app when dipatching the email.
>>php artisan serve[enter to start serve]

|
*/


Route::middleware('custom_middleware')->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\Controller::class,'Dashboard'])->name('dash');
    Route::post('/uploadProfilePics',[\App\Http\Controllers\uploadController::class,'save_pics_path'])->name('pics');
    Route::post('/logout',[\App\Http\Controllers\Controller::class,'Logout'])->name('logout');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/getRegister',[\App\Http\Controllers\Controller::class,'getRegister'])->name('register');
Route::post('/postRegister',[\App\Http\Controllers\Controller::class,'Register'])->name('postregister');
Route::get('/login',[\App\Http\Controllers\Controller::class,'getLogin'])->name('login');
Route::post('/loginpost',[\App\Http\Controllers\Controller::class,'Login'])->name('loginpost');
