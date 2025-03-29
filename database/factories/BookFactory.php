<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => $this->faker->isbn13(), // Generates a random ISBN-13
            'title' => $this->faker->sentence(3), // Generates a book title with 3 words
            'author' => $this->faker->name(), // Generates an author name
            'description' => $this->faker->paragraph(), // Generates a book description
            'date_published' => $this->faker->date(), // Generates a random date
        ];
    }

}
