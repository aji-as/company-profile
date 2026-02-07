<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        'category_id' => Categories::factory(),
        'name'=> $this->faker->sentence(2, true),
        'description' => $this->faker->sentence(30, true),
        'price'=> 8000,
        'image_url' => $this->faker->imageUrl(800, 600, 'blog', true),
        ];
    }
}
