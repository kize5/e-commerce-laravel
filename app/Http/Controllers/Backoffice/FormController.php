<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\order;
use App\Models\Product;
use App\Models\user;
use App\Models\user_adress;

class FormController extends BackofficeController
{
//    public function test () {
//        $users = user::all();
//        $adresses = user_adress::all();
//        $categories = category::all();
//        $products = Product::all();
//        $orders = order::all();
//
//        return view('test', [
//            'users'=>$users,
//            'adresses'=>$adresses,
//            'categories'=>$categories,
//            'products'=>$products,
//            'orders'=>$orders,
//            'css'=>'../css/main.css',
//            'title'=>'test'
//        ]);
//    }

    public function form(){
    return view('back.form');
    }

//    public function formpost(){
//    return
//    }

}
