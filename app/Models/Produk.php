<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    protected $fillable = [
        'kategoriproduk_id',
        'namaproduk',
        'hargaproduk',
        'stokproduk',
        'deskripsiproduk',
        'gambarproduk1',
    ];

    public function produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }
}
