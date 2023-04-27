<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IletisimModel;

class Iletisim extends Controller
{
    public function index()
    {
        return view("iletisim");
    }

    // todo Formdan verileri almak için Requst kütüphanesini kullanacaz fonksiyonumuzda da Request teki tüm metodları bilgiler adındaki değişkene atamış oluyoz
    public function ekleme(Request $bilgiler)
    {
        // $_POST["adsaoyad"] yerine Request kütüphanesi tanımladığımız için 
        // $bilgiler->adsoya;

        $adsoyad=$bilgiler->adsoyad;
        $telefon=$bilgiler->telefon;
        $mail=$bilgiler->mail;
        $metin=$bilgiler->metin;

        // echo $adsoyad."<br>";
        // echo $telefon."<br>";
        // echo $mail."<br>";
        // echo $metin."<br>";

        IletisimModel::create([
            "adsoyad"=>$adsoyad,
            "telefon"=>$telefon,
            "mail"=>$mail,
            "metin"=>$metin,
        ]);

        echo "Bilgileriniz veritabanına başarıyla kaydedilmiştir.";

    }
}
