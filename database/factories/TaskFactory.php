<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween(1,20),
            'order_id' => $this->faker->numberBetween(1,30),
            'status_id' => $this->faker->numberBetween(1,3),
            'started_at' => $this->faker->dateTime(),
            'finished_at' => $this->faker->dateTime(),
        ];
    }
}
