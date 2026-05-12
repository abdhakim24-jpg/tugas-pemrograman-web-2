<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => fake()->randomElement([
                'Laptop Gaming',
                'Mouse Wireless',
                'Keyboard Mechanical'
            ]),

            'brand' => fake()->randomElement([
                'Asus',
                'Razer',
                'Logitech'
            ]),

            'category' => fake()->randomElement([
                'Laptop',
                'Aksesoris'
            ]),

            'price' => fake()->numberBetween(100000, 10000000),

            'stock' => fake()->numberBetween(1, 100),

            'description' => fake()->sentence(10)
        ];
    }
}