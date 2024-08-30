<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\RajaOngkirController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

// landing page
Route::get('/', function () {
    return view('frontend.frontend');
});

// admin page
Route::get('/app', function () {
    return view('manage.dashboard.index');
});

// admin page -- booth
Route::get('/booth', function () {
    return view('manage.booth.index');
});
Route::get('/booth/{booth}/add', function () {
    return view('manage.booth.add');
});
Route::get('/booth/{booth}/edit', function () {
    return view('manage.booth.edit');
});

// admin page -- users
Route::get('user', [UserController::class, 'index'])->name('user');
Route::get('user/add', [UserController::class, 'add'])->name('user.add');
Route::post('user/insert', [UserController::class, 'insert'])->name('user.insert');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');

// admin page -- users address
Route::get('user/{user}/address', [UserController::class, 'address'])->name('user.address');
Route::post('user/address/get_cities', [UserController::class, 'get_cities'])->name('user.address.get_cities');



// admin page -- vendors
Route::get('vendor', [VendorController::class, 'index'])->name('vendor');







Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});


// login dan register
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// view login dan register
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/forget', function () {
    return view('auth.forget');
});

// RajaOngkir
Route::get('create_location', [RajaOngkirController::class, 'create_location']);

// Route::get('/user', function () {
    //     return view('manage.user.index');
    // });
    // Route::get('/user/{user}/add', function () {
        //     return view('manage.user.add');
        // });
        // Route::get('/user/{user}/edit', function () {
            //     return view('manage.user.edit');
            // });