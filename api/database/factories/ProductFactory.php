<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(100, 1000),
            'image' => $this->faker->imageUrl(),
            'category_id' => Category::factory(),
        ];
    }
}
