<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Yonet extends Controller
{
    // web.blade.php sayfası için controller üzerinden bir route hazırlıyoruz.
    public function site()
    {
        // view daki web sayfasına eklenmek üzere bazı değerler yollıyacaz bunun için bazı değişkenlere bu verileri öncelikle aktaracaz.
        $data["yazi1"] = "PHP Türkiye";
        $data["yazi2"] = "Web sitemize hoş geldiniz.";
        $data["yazi3"] = "Hizmetlerimiz";
        $data["yazi4"] = "Web tasarım ve yazılım hizmetlerimiz";
        $data["yazi5"] = "Bize ulaşın";
        $data["yazi6"] = "Hizmet alanlarımız";
        $data["yazi7"] = "Sağlam Temalar";
        $data["yazi8"] = "Temalarımız, hatasız kalmaları için düzenli olarak güncellenir!";
        $data["yazi9"] = "Güncelleme";
        $data["yazi10"] = "Her şeyi aktif tutmak için tüm bağımlılıklar güncel tutulur.";
        $data["yazi11"] = "Yayına Hazırlama";
        $data["yazi12"] = "Bu tasarımı olduğu gibi kullanabilir veya değişiklik yapabilirsiniz!";
        $data["yazi10"] = "Her şeyi aktif tutmak için tüm bağımlılıklar güncel tutulur.";
        $data["yazi10"] = "Her şeyi aktif tutmak için tüm bağımlılıklar güncel tutulur.";

    return view('web',$data /*,["key"=>"değer"]*/);
    }
}
