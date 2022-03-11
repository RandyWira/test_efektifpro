<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\StockController;
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
    return view('page.jenis.index');
});

Route::get('/jenis', function () {
    return view('page.jenis.index');
});
Route::get('/brand', function () {
    return view('page.brand.index');
});
Route::get('/stock', function () {
    return view('page.stock.index');
});

Route::resource('jenis', JenisController::class);
Route::resource('brand', BrandController::class);
Route::resource('stock', StockController::class);

Route::get('/getBrand/{id}', [StockController::class, 'getBrand'])->name('getBrand');
