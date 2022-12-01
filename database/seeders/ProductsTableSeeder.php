<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Product;
use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::factory()->count(10)->create();
    }
}
