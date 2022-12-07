<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//TODO: Modifications
class CartController extends Controller
{
    protected $fillable = ['name', 'price', 'quantity'];

    public function panier(){
        return view("cart",['css' => '../css/cart.css', 'title' => 'Panier']);
    }





}
