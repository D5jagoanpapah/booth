<?php

use Illuminate\Support\Facades\Route;

Route::get('/app', function () {
    return view('manage.manage');
});





// login
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/forget', function () {
    return view('auth.forget');
});
