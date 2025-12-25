<?php

use App\Http\Controllers\Api\Admin\BukuController;
use App\Http\Controllers\Api\Admin\KategoriController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Admin Panel
Route::apiResource('buku', BukuController::class);
Route::apiResource('kategori', KategoriController::class);