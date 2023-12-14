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
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(5, true),
            'image' => $this->faker->imageUrl(360,360, 'products', true),
            'stock' => $this->faker->randomNumber(2,false),
            'category_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
