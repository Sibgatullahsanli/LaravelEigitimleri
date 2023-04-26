<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilgiler extends Model
{
    use HasFactory;
    // todo veritabanında çalışacağımız tabloyu tanımlıyoz
    protected $table = "bilgiler";
    // todo model dosyasında veri eklemek için oluşturduğumuz metine veri eklemede harta verdi id haricindeki sutunları tanımlamamız gerekiyor
    protected $fillable =["metin","created_at","updated_at"];
}
