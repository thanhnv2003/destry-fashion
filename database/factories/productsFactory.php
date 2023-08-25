<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $image = [];
        for ($i = 0; $i < 5; $i++){
            $name = fake()->imageUrl();
            array_push($image, $name);
        };
        $faker = \Faker\Factory::create();
        return [
            //
            'id_cate' => $faker->numberBetween($min = 1, $max = 10),
            'id_brands' => $faker->numberBetween($min = 1, $max = 10),
            'name' => fake()->name(),
            'amount' => $faker->numberBetween($min = 10, $max = 90),
            'image' => json_encode($image),
            'old_price' => $faker->numberBetween($min = 10000, $max = 999999),
            'sale_price' => $faker->numberBetween($min = 10000, $max = 999999),
            'description' => fake()->paragraph(),
            'status' => 1
        ];
    }
}
