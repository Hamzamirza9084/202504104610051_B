<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Factories\Factory;

class ExpenseFactory extends Factory
{
    protected $model = Expense::class;

    public function definition(): array
    {
        return [
            'description' => fake('en_US')->sentence(3),
            'amount' => fake('en_US')->randomFloat(2, 10, 1000),
            'date' => fake('en_US')->dateTimeBetween('-1 year')->format('Y-m-d'),
        ];
    }
}
