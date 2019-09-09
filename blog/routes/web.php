<?php

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
Route::get('/home','Homecontroller@home');
Route::view('/home1','home');
Route::view('/login1','login/login');
Route::view('/login1','login/login');
Route::post('/home','Logincontroller@login');
