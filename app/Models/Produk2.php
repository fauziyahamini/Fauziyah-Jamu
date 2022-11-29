<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk2 extends Model
{
    use HasFactory;
    protected $table='produk2';
    
    protected $guarded=['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
