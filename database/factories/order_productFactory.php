<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'id_orders'=>fake()
//                ->unique()
                ->numberBetween(1,10),
            'id_products'=>fake()->numberBetween(1,6),
            'quantity' => fake()->numberBetween(1, 5),
        ];
    }
}
