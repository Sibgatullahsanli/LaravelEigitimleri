<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
// todo controller dosyamıza işlem yapacağımız model dosyasını ekliyoruz
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
    // todo model dosyası ile veri alma işlemi
    public function liste()
    {
        // $bilgi=Bilgiler::get();
        // $bilgi=Bilgiler::where("id",2)-> get();
        // $bilgi=Bilgiler::where("id",2)-> first();
        // $bilgi=Bilgiler::whereId(2)-> first();
        $bilgi=Bilgiler::whereMetin("Ak akçe kara gün içindir.")-> first();
        // $bilgi=Bilgiler::find(2);  // direk id baz alarak olan veriyi alıyor

        // echo $bilgi;
        echo $bilgi->metin;
    }

    // todo todo model dosyası ile veri ekleme işlemi
    public function ekle()
    {
        Bilgiler::create([
            
            "metin"=>"Model dosyasından eklendi",
        ]);
    }

    // todo todo model dosyası ile veri güncelleme işlemi
    public function guncelle()
    {
        Bilgiler::whereId(3)->update([
            "metin"=>"Model dosyasından güncelleme yapıldı",
        ]);
    }

    // todo todo model dosyası ile veri silme işlemi
    public function sil()
    {
        Bilgiler::whereId(6)->delete([
            "metin"=>"Model dosyasından güncelleme yapıldı",
        ]);
    }


}
