<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post')
        ->middleware('throttle:5,1'); // 5 попыток в минуту
});

// Логаут (только авторизованным)
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Админка (только после логина и с нужными ролями)
//Route::middleware(['auth', 'role:Admin|SuperAdmin'])->group(function () {
Route::middleware(['auth', 'role:Admin|SuperAdmin'])->group(function () {
    Route::get('/admin', fn() => view('admin.dashboard'))->name('admin.dashboard');
});

Route::middleware(['auth', 'permission:manage users'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class)->except(['show']);
});


//Route::get('/adminlte', function () {
//    return view('test.first_page_adminlte');
//});

//Route::post('/login', [AuthController::class, 'login']);
//
//Route::middleware('auth:sanctum')->group(function () {
//    Route::get('/me', [AuthController::class, 'me']);
//    Route::post('/logout', [AuthController::class, 'logout']);
//});


//Route::middleware(['auth:sanctum', 'role:SuperAdmin'])->group(function () {
//    Route::get('/admin/metrics', fn () => ['secret' => 'only superadmin']);
//});
//
//Route::middleware(['auth:sanctum', 'role:Admin'])->group(function () {
//    Route::get('/users', fn () => \App\Models\User::select('id','name','email')->get());
//});
//
//Route::middleware(['auth:sanctum', 'permission:manage products'])->group(function () {
//    Route::get('/products', fn () => ['ok' => 'can manage products']);
//});
