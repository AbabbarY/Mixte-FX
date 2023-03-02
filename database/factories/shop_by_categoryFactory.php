<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\shop_by_category>
 */
class shop_by_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->title();
        return [
            "title" => $title,
            "slug" => Str::slug($title),
            "description" => fake()->paragraph(1),
            "type" => fake()->title(),
            "prix" => fake()->numberBetween(100,1000),
            "old-prix" => fake()->numberBetween(100,1000),
            "image" => fake()->imageUrl(640,480),
            "quantité" => fake()->numberBetween(0,100),

        ];
    }
}
