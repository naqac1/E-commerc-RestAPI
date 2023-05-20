<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $factory->define(Review::class, function (Faker $faker) {

            return [
                "product_id" => function(){
                    return App\Product::all()->random();
                },
                "customer" => $faker->name,
                "review" => $faker->paragraph,
                "star" => $faker->numberBetween(0,5)
            ];

        });

    }
}
