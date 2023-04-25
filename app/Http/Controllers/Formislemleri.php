<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Formislemleri extends Controller
{
    public function gorunum()
    {
        return view("form");
    }

    public function sonuc(Request $request)
    {
        // return "Bu kısım çalıştı";
        return $request->metin;
    }
}
