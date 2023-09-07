<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'product_name' => ucfirst($this->faker->words(2,true)),
            'thumbnail' => '',
            'price' => $this->faker->numberBetween(0, 10000),
        ];
    }
}
