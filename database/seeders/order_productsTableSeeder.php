<?php

namespace Database\Seeders;

use App\Models\order;
use App\Models\order_product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
//        order_product::factory()->count(25)->create();
        order::factory()->count(10)->create();

        $ids = range(1, 10);

        order::factory()->count(40)->create()->each(function ($order) use ($ids) {
            shuffle($ids);
            $order->products()->attach(array_slice($ids, 0, rand(1, 4)));
        });
    }
};