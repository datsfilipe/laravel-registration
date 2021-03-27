<?php

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

Route::get('/menu', function (){
    return view('menu');
});

Route::get('/register', function (){
    return view('register');
})->name('register');

Route::get('/show-register', 'App\Http\Controllers\ControllerRegister@showRegister')->name('showRegister');

Route::post('/finish-register', 'App\Http\Controllers\ControllerRegister@saveRegister')->name('finishRegister');