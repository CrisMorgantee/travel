<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drivings>
 */
class DrivingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_driving_at' => now(),
            'end_driving_at'   => now(),
            'stoped_at'        => null,
            'continued_at'     => null,
        ];
    }
}
