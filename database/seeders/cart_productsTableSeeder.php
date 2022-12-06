<?php

namespace Database\Seeders;

use App\Models\cart_product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cart_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        cart_product::factory()->count(3)->create();

        for($i=1; $i<8; $i++) {
            DB::table('cart_products')->insert([
                'id_carts'=> $i,
                'id_products'=> fake()->numberBetween(1, 6),
                'quantity'=> fake()->numberBetween(1, 6),
            ]);
        }
    }
}
