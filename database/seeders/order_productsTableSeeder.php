<?php

namespace Database\Seeders;

use App\Models\order_product;
use Illuminate\Database\Seeder;

class order_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order_product::factory()->count(10)->create();

    }
}

;