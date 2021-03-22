<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cat' => 1,
            'name' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'photopath' => $this->faker->sentence,
            'price1' => $this->faker->numberBetween(1000, 10000),
            'price2' => $this->faker->numberBetween(1000, 10000),
            'price3' => $this->faker->numberBetween(1000, 10000),
            'active' => 1
        ];
    }
}
