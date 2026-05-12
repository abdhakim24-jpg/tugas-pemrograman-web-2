<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [

            'category_id' => Category::factory(),

            'name' => fake()->randomElement([
                'Laptop Gaming',
                'Mouse Wireless',
                'Keyboard Mechanical'
            ]),

            'brand' => fake()->randomElement([
                'Asus',
                'Logitech',
                'Razer'
            ]),

            'price' => fake()->numberBetween(100000, 10000000),

            'stock' => fake()->numberBetween(1, 100),

            'description' => fake()->sentence(10)
        ];
    }
}