<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

//    protected $guarded = [];

    protected $fillable = ['name', 'price', 'quantity', 'desciption', 'image', 'id_category'];

    public function category () {
        return $this->belongsTo(Category::class,'id_category');
    }

    public function order () {
        return $this->belongsToMany(Order::class, 'order_products', 'id_products', 'id_orders');
}

    public function cart () {
        return $this->belongsToMany(Cart::class, 'cart_products', 'id_products', 'id_carts')
            ->withPivot(['quantity']);
    }

}
