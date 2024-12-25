<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test-koneksi-database', function() {
// 	try {
// 		\DB::connection()->getPdo();

// 		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

// 	} catch (\Exception $e) {
// 		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
// 	}
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/validasi&verifikasi', function () {
    return view('validasi&verifikasi');
});
Route::get('/pengelolaan', function () {
    return view('pengelolaan');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/tambahdata', function () {
    return view('tambahdata');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});