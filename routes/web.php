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

# Routes user

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function (){
    return view('menu');
});

Route::get('/user/register', function (){
    return view('user.user-register');
})->name('userRegister');

Route::get('/user/show-register', 'App\Http\Controllers\ControllerRegister@showUserRegister')->name('showUserRegister');

Route::post('/user/finish-register', 'App\Http\Controllers\ControllerRegister@saveUserRegister')->name('saveUserRegister');

Route::get('/user/edit-register/{id}', 'App\Http\Controllers\ControllerRegister@editUserRegister')->name('editUserRegister');

Route::get('/user/delete-register/{id}', 'App\Http\Controllers\ControllerRegister@deleteUserRegister')->name('deleteUserRegister');

Route::post('/user/edit-register-save', 'App\Http\Controllers\ControllerRegister@saveEditedUserRegister')->name('saveEditedUserRegister');

# Routes Adress

Route::get('/adress/register', function () {
    return view('adress.adress-register');
})->name('adressRegister');

Route::post('/adress/register-save', 'App\Http\Controllers\ControllerAdress@saveAdressRegister')->name('saveAdressRegister');

Route::get('/adress/show-register', 'App\Http\Controllers\ControllerAdress@showAdressRegister')->name('showAdressRegister');

Route::get('/adress/edit-register/{id}', 'App\Http\Controllers\ControllerAdress@editAdressRegister')->name('editAdressRegister');

Route::post('/adress/edit-register-save', 'App\Http\Controllers\ControllerAdress@saveEditedAdressRegister')->name('saveEditedAdressRegister');

Route::get('/adress/delete-register/{id}', 'App\Http\Controllers\ControllerAdress@deleteAdressRegister')->name('deleteAdressRegister');