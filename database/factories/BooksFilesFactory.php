<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BooksFiles>
 */
class BooksFilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_id' => $this->faker->numberBetween(1,30),
            'path' => $this->faker->url(),
            'description' => $this->faker->realText(),
        ];
    }
}
