<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\category;
use App\Models\order;
use App\Models\Product;
use App\Models\User;
use App\Models\user_adress;

class TestController extends Controller
{
    public function test () {
        $users = User::all();
        $adresses = user_adress::all();

        $categories = category::all();
        $products = Product::all();

        $orders = order::all();
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
