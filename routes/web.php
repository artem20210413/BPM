<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

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
