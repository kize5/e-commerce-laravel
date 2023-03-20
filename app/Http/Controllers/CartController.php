<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Cart_product;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use App\Models\exuser;
use App\Models\User;
use http\Client\Request as RequestAlias;
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

    public function thanks(Request $request)
    {
        $cart = Cart::query()->where(['id' => $request->id])->first();
        $cart_products = Cart_product::query()->where(['id_carts' => $request->id])->get();

        if ($request->isMethod('post')) {
            $order = new Order();
            $order->id_users = $cart->id_users;
            $order->save();

            $newOrderId = Order::query()->orderBy('created_at', 'desc')->first();
            foreach ($cart_products as $order_product)
            {
                $order_prod = new Order_product();
                $order_prod->id_orders = $newOrderId->id;
                $order_prod->id_products = $order_product->id_products;
                $order_prod->quantity = $order_product->quantity;
                $order_prod->save();
            }

            $cart_products = Cart_product::query()
                ->where(['id_carts' => $request->id])
                ->delete();

            return view('thanks', ['css' => '../css/homepage.css', 'title' => 'Thanks']);
        }
        return view('thanks', ['css' => '../css/homepage.css', 'title' => 'Error']);
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