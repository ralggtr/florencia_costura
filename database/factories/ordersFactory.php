<?php

namespace Database\Factories;

use App\Models\orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class ordersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => \App\Models\Customer::factory()->create(),
            //'id_cust' => 1,
            'status' => 0

        ];
    }
}
