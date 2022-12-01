<?php

namespace Database\Factories;

use Database\Seeders\order_productsTableSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class order_productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'quantity' => fake()->numberBetween(1, 10),
            'order_id' => fake()->numberBetween(1,10),
            'product_id' =>fake()->numberBetween(1,10),

        ];
    }





}
