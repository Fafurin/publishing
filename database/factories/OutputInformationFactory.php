<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OutputInformation>
 */
class OutputInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'circulation' => $this->faker->numberBetween(50,2000),
            'publication_date' => $this->faker->date(),
            'conv-print_sheets' => $this->faker->randomFloat(2, 1, 100),
            'publishing_sheets' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
