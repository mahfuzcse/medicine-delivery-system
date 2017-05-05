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
    //return view('welcome');
    return "Home";
});

Route::get('/about', function () {
    //return view('welcome');
    return "About Page";
});

Route::get('/test', function () {
    return view('Test.index');
   // return "About Page";
});