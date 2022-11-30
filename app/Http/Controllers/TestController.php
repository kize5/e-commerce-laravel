<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use App\Models\user;
use App\Models\user_adress;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test () {
        $users = user::all();

        $adresses = user_adress::all();
        $categories = category::all();
        $products = Product::all();
        return view('test', [
            'users'=>$users,
            'adresses'=>$adresses,
            'categories'=>$categories,
            'products'=>$products,
            'css'=>'../css/main.css',
            'title'=>'test'
        ]);
    }
}
