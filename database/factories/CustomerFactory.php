<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'names'=>$this->faker->name,
            'lastnames'=>$this->faker->lastname,
            'area'=>$this->faker->city,
            'address1'=>$this->faker->sentence,
            'address2'=>$this->faker->sentence,
            'address3'=>$this->faker->sentence,
            'address4'=>$this->faker->sentence,
            'city'=>'Mexico',
            'country'=>'Mexico',
            'phone'=>'5532622335',
            'email'=>$this->faker->unique()->safeEmail,
            'zipcode'=>'1790',
            'origin'=>0,
            'notes'=>$this->faker->paragraph
        ];
    }
}
