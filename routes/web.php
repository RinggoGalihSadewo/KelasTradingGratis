<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siteMap;

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
    return view('index');
});

Route::get('/kelas-private-berbayar', function () {
    return view('kelasPrivateBerbayar');
});

Route::get('/software-trading', function () {
    return view('softwareTrading');
});

Route::get('/tour-trading', function () {
    return view('tourTrading');
});

Route::get('/sitemap.xml', [siteMap::class, 'index']);

Route::get('/signal-gratis', function () {
    return view('signalGratis');
});