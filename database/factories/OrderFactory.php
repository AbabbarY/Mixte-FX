<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
        return [
            "user_id" => fake()->name(),
            "product_name" => fake()->name(),
            "prix" => fake()->numberBetween(10,1000),
            "size" => fake()->words(3),
            "quantite" => fake()->numberBetween(0,100),
            "total" => fake()->numberBetween(0,10000),
        ];
    }
}
