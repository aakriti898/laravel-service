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

Route::get('/def', function () {
    return view('default');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/AboutUs', function () {
    return view('AboutUS');
});

Route::get('/contact', function () {
    return view('ContactUs');
});

Route::get('/faq', function () {
    return view('FAQ');
});

Route::get('/privacy', function () {
    return view('Privacy');
});

Route::get('/request', function () {
    return view('request');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/detail/{name}', function ($name) {
    // backend code here
    // dump($name);
    return view('detail');

});

