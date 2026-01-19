<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $title = $this->faker->sentence(6);
        return [
            'author_id' => User::factory(), 
            'title'     => $title,
            'slug'      => Str::slug($title) . '-' . Str::random(5),
            'content'   => $this->faker->paragraphs(5, true),
            'image'     => $this->faker->imageUrl(800, 600, 'blog', true),
            'created_at'=> now(),
            'updated_at'=> now()
        ];
    }
}
