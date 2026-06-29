<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobListingController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\DashboardController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('jobs', JobListingController::class);
Route::apiResource('categories', CategoryController::class);

// Authentication
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index']);