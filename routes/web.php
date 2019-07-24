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

//Boite de connexion
Route::get('/tailwindcss', function () {
    return view('tailwindcss');
});

//Navbar
Route::get('/navbar', function () {
    return view('navbar');
});
