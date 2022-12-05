<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['id_category'];

    public function category () {
        return $this->belongsTo(category::class,'id_category');
    }

    public function order () {
        return $this->belongsToMany(order::class, 'order_products', 'id_products', 'id_orders');
}

}
