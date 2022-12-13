<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules\Password;

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

    public function create()
    {
        return view('back.form');
    }

    public function store(Request $request)
    {

        $validated=$request->validate([
            'first_name' => ['required', 'max:20'],
            'last_name' => ['required', 'max:20'],
            'email' => ['required', 'unique:users,email', 'email:rfc', 'email:dns'],
            'password' => ['required', Password::min(8)
                ->mixedCase()->symbols()->uncompromised()],
        ]);


        User::create($validated);
        return redirect(route('backoffice.test.create'))->with('sucess', 'Enregistrement validé');

    }


    /**
     * authentificated user's password (current_password
     *'password' => 'current_password:api'
     * return redirect('register')->withErrors($validator, 'login');
     */
}