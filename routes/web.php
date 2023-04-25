<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Yonet;  // web.blade.php view sayfasına ait Yonet adlı controller sayfasını ekledik 
use App\Http\Controllers\Formislemleri; // form.blade.php view sayfasına ait Formislemleri adlı controller sayfasını ekledik
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

Route::get("/web", [Yonet::class,'site'])->name('Anasayfa');

Route::get("/form", [Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')-> post("/form_sonuc", [Formislemleri::class,'sonuc'])->name('sonuc');