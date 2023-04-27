<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResimYukle extends Controller
{
    public function resimYukleme(Request $request)
    {
        // return "Buraya geldi";
        $resimadi=$request->resim->getClientOriginalName(); // getClientOriginalName() ile dosyanın tam isminide almasını istiyoruz.
        // $resimadi= rand(0,100).".".$request->resim->getClientOriginalExtension();  // getClientOriginalExtension() ilede dosyanın sadece uzantısını almasını belirtiyoz
        $yukle = $request->resim->move(public_path('images'),$resimadi);
    }
}
