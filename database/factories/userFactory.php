<?php

namespace Database\Factories;

use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class userFactory extends Factory
{
    protected $model = user::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->firstName($gender = null),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'password' => fake()->password(),
        ];
    }
}
