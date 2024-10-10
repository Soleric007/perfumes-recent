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
            'title' => $this->faker->word,  // Random word for perfume title
            'description' => $this->faker->sentence(50),  // Random sentence for description
            'price' => $this->faker->randomFloat(2, 20, 500),  // Price between 20 and 500
            'stock' => $this->faker->numberBetween(10, 100),  // Stock between 10 and 100
            'discount' => $this->faker->numberBetween(0, 30),  // Discount between 0 and 30%
            'image' => $this->faker->imageUrl(640, 480, 'perfume', true),  // Fake image URL for perfume
        ];
    }
}
