<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Controller ;

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


Route::get('/', [Controller::class, 'homepage']);
Route::get('/cadastro', [Controller::class, 'cadastro']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Routes to user auth

Route::get('/login', [Controller::class, 'login']);
Route::get('/login', [Controller::class, 'login'])->name('user.login');
