<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
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
            "Account Holder" => $this->faker->randomElement(['John Doe', 'Jane Doe', 'John Smith', 'Jane Smith']),
            "Account Number" => $this->faker->unique()->randomNumber(9),
            "Account Type" => $this->faker->randomElement(['Savings', 'Current']),
            "Bank Name" => $this->faker->company,
            "Branch" => $this->faker->city,
            "IFSC Code" => $this->faker->randomNumber(6),
            "Balance" => $this->faker->randomNumber(5),
            "Status" => $this->faker->randomElement(['Active', 'Inactive']),
            "Investment" => $this->faker->randomElement(['Yes', 'No']),
            "Investment Amount" => $this->faker->randomNumber(5),

        ];
    }
}
