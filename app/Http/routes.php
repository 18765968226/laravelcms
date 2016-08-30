<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/github', function () {
    return view('github');
});

<<<<<<< HEAD
Route::get('/add', function () {
    return view('add');
});
=======


>>>>>>> 94e2e4fa5a55639bad38930dcaa9ab9c2a325dce
