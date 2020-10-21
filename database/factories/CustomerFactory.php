<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'SalesRepEmployeeNum' => $this->faker->name,
            'Name' =>                $this->faker->name,
            'FirstName' =>           $this->faker->name,
            'LastName' =>            $this->faker->name,
            'Phone' =>               $this->faker->,
            'Address1' =>            $this->faker->address,
            'Address2' =>            $this->faker->address,
            'City' =>                $this->faker->name,
            'State' =>               $this->faker->name,
            'PostalCode' =>          $this->faker->name,
            'Country' =>             $this->faker->name,
            'CreditLimit' =>         Str::random(10)
        ];
    }
}
