<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Product;
use App\Models\user;

class DashboardController extends BackofficeController
{

    public function dashboard()
    { $products = Product::query()
        ->orderBy("id")
        ->paginate(25);
        return view("back/dashboard", ["products" => $products]);

    }



}
