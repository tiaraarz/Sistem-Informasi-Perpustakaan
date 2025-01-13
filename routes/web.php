<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//buku
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index']);
Route::get('/buku/create', [App\Http\Controllers\BukuController::class, 'create']);
Route::post('/buku', [App\Http\Controllers\BukuController::class, 'store']);
Route::get('/buku/{id}/edit', [App\Http\Controllers\BukuController::class, 'edit']);
Route::patch('/buku/{id}', [App\Http\Controllers\BukuController::class, 'update']);
Route::delete('/buku/{id}', [App\Http\Controllers\BukuController::class, 'destroy']);
//peminjam
Route::get('/peminjam', [App\Http\Controllers\PeminjamController::class, 'index']);
Route::get('/peminjam/create', [App\Http\Controllers\PeminjamController::class, 'create']);
Route::post('/peminjam', [App\Http\Controllers\PeminjamController::class, 'store']);
Route::get('/peminjam/{id}/edit', [App\Http\Controllers\PeminjamController::class, 'edit']);
Route::patch('/peminjam/{id}', [App\Http\Controllers\PeminjamController::class, 'update']);
Route::delete('/peminjam/{id}', [App\Http\Controllers\PeminjamController::class, 'destroy']);
// peminjaman
Route::get('/peminjaman', [App\Http\Controllers\PeminjamanController::class, 'index']);
Route::get('/peminjaman/create', [App\Http\Controllers\PeminjamanController::class, 'create']);
Route::post('/peminjaman', [App\Http\Controllers\PeminjamanController::class, 'store']);
Route::get('/peminjaman/{id}/edit', [App\Http\Controllers\PeminjamanController::class, 'edit']);
Route::patch('/peminjaman/{id}', [App\Http\Controllers\PeminjamanController::class, 'update']);
Route::delete('/peminjaman/{id}', [App\Http\Controllers\PeminjamanController::class, 'destroy']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
