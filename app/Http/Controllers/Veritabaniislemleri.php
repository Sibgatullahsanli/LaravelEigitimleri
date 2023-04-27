<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Veritabaniislemleri extends Controller
{
    // todo ilk veri yollama
    public function ekle()
    {
        // sql de girdiğimiz komutlar(insert into tabloadi values(ad soyad))
        DB::table("bilgiler")->insert([
            "metin"=>"Ak akçe kara gün içindir."
        ]);
    }

    // todo veritabanındaki veriyi güncelleme
    public function guncelle()
    {
        DB::table("bilgiler")->where("id",1)->update([
            "metin"=>"Bu metin alanımız güncellenmiştir."
        ]);
    }

    // todo tablodan veri silme işlemi
    public function sil()
    {
        // DB::table("bilgiler")->where("id",1)->delete();
        DB::table("iletisim")->delete();
    }

    // todo bi tablodaki verileri okumak için 
    public function bilgiler()
    {
        $veriler=DB::table("bilgiler")->get();
        // verileri dizi olarak alacağından dolayı print_r ile alacaz
        // print_r($veriler);
        // todo çoklu veri almak için foreach döngüyü kullanmalıyız
        foreach ($veriler as $key => $bilgi) {
            echo $bilgi->id." ".$bilgi->metin;
            echo "<br>";
        }
        // todo tekli veri almak için ise sistemi yormamak için foreach açmıyoruz
        /*
        $bilgi=DB::table("bilgiler")->where("id",3)->first();
        echo $bilgi->id." ".$bilgi->metin;
        */
    }


}
