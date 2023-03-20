<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\exuser;
use App\Models\User_adress;

class TestController extends Controller
{
    public function test () {
        $users = exuser::all();
        $adresses = User_adress::all();

        $categories = Category::all();
        $products = Product::all();

        $orders = Order::all();
        $carts = Cart::query()->where(['id_users'=>5])->get();

        return view('test', [
            'users'=>$users,
            'adresses'=>$adresses,
            'categories'=>$categories,
            'products'=>$products,
            'orders'=>$orders,
            'css'=>'../css/main.css',
            'title'=>'test',
            'carts'=>$carts
        ]);
    }
}
