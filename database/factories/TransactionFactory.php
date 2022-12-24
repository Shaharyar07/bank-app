<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            //
            "Account Number" => $this->faker->unique()->randomNumber(9),
            "Transaction ID" => $this->faker->unique()->randomNumber(9),
            "Transaction Date" => $this->faker->date(),
            "Transaction Amount" => $this->faker->randomNumber(5),
            "Transaction Status" => $this->faker->randomElement(['Success', 'Failed']),
            "Receiver Name" => $this->faker->name,
            "Receiver Account Number" => $this->faker->randomNumber(9),
        ];
    }
}
