<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function adef () {
        return $this->belongsToMany(Product::class, 'order_products', 'id_orders', 'id_products');
    }
}
