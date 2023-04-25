<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Formkontrol
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if($request->metin=="elma") // $request->(bölümü üçerisindeki)metin(metin alanında) elma kelimesi geçiyor ise 
        {
            // redirect komutu ile sayfamızı bir geriye göndersin
            return redirect()->back();
        }
        return $next($request);
    }
}
