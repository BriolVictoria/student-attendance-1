<?php

namespace Database\Factories;

use App\Models\Lesson;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $starts_at = CarbonImmutable::now()->addDays(random_int(10, 100));
        $ends_at = $starts_at->addHours(random_int(1, 6));

        return [
            'starts_at' => $starts_at,
            'ends_at' => $ends_at,
        ];
    }
}
