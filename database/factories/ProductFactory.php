<?php

namespace Database\Factories;

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
            'title' => $this->faker->title,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(100,500),
            'weight' => $this->faker->numberBetween(1,5),
            'category_id' => random_int(1,3),
            'image' => $this->faker->imageUrl
        ];
    }
}
