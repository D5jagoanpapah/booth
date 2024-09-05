<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoothController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RajaOngkirController;
use App\Http\Controllers\UserAddressController;

// landing page
Route::get('/', [FrontendController::class, 'index'])->name('view');
Route::get('viewpayment', [FrontendController::class, 'viewpayment'])->name('view.payment');
Route::get('viewbooth', [FrontendController::class, 'viewbooth'])->name('view.booth');
Route::get('viewboothcategory', [FrontendController::class, 'viewboothcategory'])->name('view.category');


// landing page -login and regsiter
Route::get('login-user', [FrontendController::class, 'userlog'])->name('user-login');
Route::get('regis-user', [FrontendController::class, 'userregis'])->name('user-register');




// admin page
Route::get('/app', function () {
    return view('manage.dashboard.index');
});



// admin page -- users
Route::get('user', [UserController::class, 'index'])->name('user');
Route::get('user/add', [UserController::class, 'add'])->name('user.add');
Route::post('user/insert', [UserController::class, 'insert'])->name('user.insert');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');

// admin page -- users address
Route::get('user/{user}/address', [UserAddressController::class, 'index'])->name('user.address.index');
Route::post('user/{user}/address', [UserAddressController::class, 'store'])->name('user.address.store');
Route::post('user/address/get_cities', [UserController::class, 'get_cities'])->name('user.address.get_cities');

// admin page -- vendors
Route::get('vendor', [VendorController::class, 'index'])->name('vendor');
Route::get('vendor/add', [VendorController::class, 'add'])->name('vendor.add');
Route::post('vendor/insert', [VendorController::class, 'insert'])->name('vendor.insert');
Route::post('vendor/get_address', [VendorController::class, 'get_address'])->name('vendor.get_address');
Route::get('vendor/{vendor}/edit', [VendorController::class, 'edit'])->name('vendor.edit');
Route::put('vendor/{vendor}/update', [VendorController::class, 'update'])->name('vendor.update');
Route::delete('vendor/{vendor}/delete', [VendorController::class, 'destroy'])->name('vendor.delete');

// admin page -- Category Booth
Route::get('booth_category', [CategoriesController::class, 'index'])->name('booth_category');
Route::get('booth_category/add', [CategoriesController::class, 'add'])->name('booth_category.add');
Route::post('booth_category/insert', [CategoriesController::class, 'insert'])->name('booth_category.insert');
Route::get('booth_category/{category}/edit', [CategoriesController::class, 'edit'])->name('booth_category.edit');
Route::put('booth_category/{category}', [CategoriesController::class, 'update'])->name('booth_category.update');
Route::delete('booth_category/{category}/delete', [CategoriesController::class, 'destroy'])->name('booth_category.delete');

// admin page --  Booth
Route::get('booth', [BoothController::class, 'index'])->name('booth_category');
Route::get('booth/add', [BoothController::class, 'add'])->name('booth.add');
Route::post('booth/insert', [BoothController::class, 'insert'])->name('booth.insert');
Route::get('booth/{booth}/edit', [BoothController::class, 'edit'])->name('booth.edit');
Route::put('booth/{booth}/update', [BoothController::class, 'update'])->name('booth.update');
Route::delete('booth/{booth}/delete', [BoothController::class, 'destroy'])->name('booth.delete');
Route::get('booth/images/{booth_image}/delete', [BoothController::class, 'destroy_image'])->name('booth.images.delete');





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
