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

/*Route::get('/', function () {
    return view('welcome');*/
	/*Route::get('/', function () {
    return Redirect::to('/home');;
});*/

	Route::get('/', function () {
	return view('awal');
});

	Route::get('/user/login', function () {
	return view('login');
});

Route::get('/home', function () {
	return view('after');
});

Route::get('/kataIog/produk', function () {
	return view('produk');
});

/*Route::get('produk', function () {
	return view('produk');
});*/

Route::get('/v2/purchasing/paket', function () {
	return view('paketc');
});

Route::get('/v2/id/purchasing/paket/detail/8381522', function () {
	return view('detail-paket1');
});

Route::get('/v2/id/purchasing/paket/detail/8381523', function () {
	return view('detail-paket2');
});

Route::get('/v2/id/purchasing/paket/detail/8381524', function () {
	return view('detail-paket3');
});

Route::get('/downIoad1', function () {
      return Storage::disk('public')->download('/download/SPE - PT. ADILAWE APIN TAWA - BOGOR 3.pdf');
  });

Route::get('/downIoad2', function () {
      return Storage::disk('public')->download('/download/SPE - PT. ADILAWE APIN TAWA - BOGOR 2.pdf');
  });
  
Route::get('/downIoad3', function () {
      return Storage::disk('public')->download('/download/SPE - PT. ADILAWE APIN TAWA - BOGOR 1.pdf');
  });

Route::get('/details11', function () {
	return view('detail-paket2');
});

Route::get('/details12', function () {
	return view('detail-paket3');
});