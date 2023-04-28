<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Yonet;  // web.blade.php view sayfasına ait Yonet adlı controller sayfasını ekledik 
use App\Http\Controllers\Formislemleri; // form.blade.php view sayfasına ait Formislemleri adlı controller sayfasını ekledik
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;
use App\Http\Controllers\Uyelikislemleri;

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

Route::get("/ekle", [Veritabaniislemleri::class,'ekle']);
Route::get("/guncelle", [Veritabaniislemleri::class,'guncelle']);
Route::get("/sil", [Veritabaniislemleri::class,'sil']);
Route::get("/listele", [Veritabaniislemleri::class,'bilgiler']);

Route::get("/modellist", [Modelislemleri::class,'liste']);
Route::get("/modelekle", [Modelislemleri::class,'ekle']);
Route::get("/modelguncelle", [Modelislemleri::class,'guncelle']);
Route::get("/modelsil", [Modelislemleri::class,'sil']);

Route::get("/iletisim", [Iletisim::class,'index']);
Route::post("/iletisim-sonuc", [Iletisim::class,'ekleme'])->name("iletisim-sonuc");

Route::get('/upload', function(){
    return view('upload');
});
Route::post('/resim-ilet', [ResimYukle::class,'resimYukleme'])->name('yukle');

Route::get('/uye', function(){
    return view('uyelik');
});

Route::post('uye-kayit', [Uyelikislemleri::class, 'uyekayit'])->name('uyekayit');