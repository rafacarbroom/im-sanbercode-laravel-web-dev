<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/welcome', function (Request $request) {
    $firstname = $request->input('firstname');
    $lastname  = $request->input('lastname');
    return view('welcome', compact('firstname', 'lastname'));
});