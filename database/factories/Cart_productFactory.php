<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart_product>
 */
class Cart_productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //TODO: ajout dans return
    public function definition()
    {
        return [
            'id_carts'=> rand(1,2),
            'id_products'=> fake()->numberBetween(1, 6),
            'quantity' => fake()->numberBetween(0, 50),
            'id_category' => rand(1, 2),

        ];
    }
}
