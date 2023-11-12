<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRolePermission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Route View Layouts*/
Route::get('/header', function () { return view('layouts.header'); });
Route::get('/header-logout', function () { return view('layouts.header-logout'); });
Route::get('/footer', function () { return view('layouts.footer'); });

/*Route View Before Login*/
Route::get('/', function () { return view('welcome'); });
Route::get('/homepage', function () { return view('homepage'); });
Route::get('/about', function () { return view('about'); });
Route::get('/service', function () { return view('service'); });
Route::get('/admin.layout', function () { return view('admin.layout'); });
Route::get('/barang', function () { return view('barang'); });
Route::get('/jenis-service', function () { return view('kategori'); });
Route::get('/detail', function () { return view('detail'); });

/*Route View After Login*/
// Route::get('/', function () { return view('welcome'); });
// Route::get('/dashboard', function () { return view('customer.dashboard'); });
// Route::get('/header', function () { return view('layouts.header'); });
// Route::get('/header-logout', function () { return view('layouts.header-logout'); });
// Route::get('/footer', function () { return view('layouts.footer'); });
// Route::get('/about-us', function () { return view('customer.about-us'); });
// Route::get('/admin', function () {
//     return view('admin.layout');
// });

// Route::middleware([CheckRolePermission::class . ':admin'])->group(function () {
//      // Rute yang hanya dapat diakses oleh pengguna dengan peran 'admin'
//     Route::get('/admin', 'admin.layout');
// });

// Route::get('/admin', 'admin.layout')->middleware(CheckRolePermission::class . ':admin');

// Route::middleware(['checkRole:admin'])->group(function () {
//     // Mengarahkan rute /admin ke tindakan showLayout di dalam AdminController
//     Route::get('/admin', [AdminController::class, 'showLayout']);
//     // Route::get('/admin', 'admin.layout');
// });

// Route::resource('jenislayanan', JenisLayananController::class);
// Route::get('jenislayanan', [JenisLayananController::class, 'index'])->name('jenislayanan.index');
// Route::get('jenislayanan/create', [JenisLayananController::class, 'create'])->name('jenislayanan.create');
