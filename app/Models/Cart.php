<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'produk_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    protected $appends = ['product_total'];

    public function getProductTotalAttribute()
    {
        return $this->hargaproduct * $this->quantity;
    }
    }
