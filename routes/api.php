<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rute API yang memerlukan middleware CheckRolePermission:admin
Route::middleware(['auth:sanctum', 'checkRole:admin'])->group(function () {
    // Contoh rute untuk mengambil data admin
    Route::get('/admin-data', [AdminController::class, 'getAdminData']);
});

// Rute API yang memerlukan middleware CheckRolePermission:user
Route::middleware(['auth:sanctum', 'checkRole:user'])->group(function () {
    // Contoh rute untuk mengambil data pengguna biasa
    Route::get('/user-data', [AdminController::class, 'getUserData']);
});






