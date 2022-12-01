<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function product () {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id');
    }


}
