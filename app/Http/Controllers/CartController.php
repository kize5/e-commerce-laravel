<?php

namespace App\Http\Controllers;


use App\Models\Cart_product;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function panier(Request $request)
    {

        if ($request->isMethod('post')) {
            $id = $request->input('id');
            $qty = $request->input('qty');

            $cart_prod = new Cart_product();
            $cart_prod->id_carts = 5;
            $cart_prod->id_products = $id;
            $cart_prod->quantity = $qty;
            $cart_prod->save();

            $product = Product::query()->where(['id' => $id])->first();
            $product->quantity = $product->quantity - $qty;
            $product->save();

            $user = User::query()
                ->where(['id' => 5])
                ->with(['current_cart.products'])
                ->first();

            $totals = 0;

            foreach ($user->current_cart->products as $product) {
                $totals += $product->price * $product->pivot->quantity;
            }

            return view("cart",
                [
                    'css' => '../css/cart.css',
                    'title' => 'Panier',
                    'cart' => $user->current_cart,
                    'totals' => $totals,
                ]);
        }
        return redirect(route('panierget'));
    }

    public function panierget(Request $request)
    {
        $user = User::query()
            ->where(['id' => 5])
            ->with(['current_cart.products'])
            ->first();

        $totals = 0;

        foreach ($user->current_cart->products as $product) {
            $totals += $product->price * $product->pivot->quantity;
        }


        return view("cart",
            [
                'css' => '../css/cart.css',
                'title' => 'Panier',
                'cart' => $user->current_cart,
                'totals' => $totals
            ]);
    }
}

//          -------------  créer un cookie ------------
//            if(!Cookie::has('cookieprice')) {
//            $minute = 60;
////                $price = $request->input('price');
////                Cookie::queue('cookieprice', $price, $minute);
//            return redirect('cart');
//        }
//        $price = $request->cookie('cookieprice');