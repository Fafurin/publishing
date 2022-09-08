<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(1,999),
            'customer_id' => Customer::factory()->create(),
            'book_id' => Book::factory()->create(),
            'payment' => $this->faker->regexify('(contract|receipt)'),
            'status' => $this->faker->regexify('(standing_by|in_work|in_archive)'),
            'deadline' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph(2, true),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
