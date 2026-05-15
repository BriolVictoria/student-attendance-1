<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->email(),
            'first_name' => fake()->firstname(),
            'last_name' => fake()->lastname(),
            'matricule' => fake()->unique()->numerify('TECG-#####'),
        ];
    }
}
