<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_mk' => 'MK' . fake()->unique()->numerify('###'),
            'nama_mk' => fake()->sentence(3),
            'sks' => fake()->randomElement([2, 3, 4]),
            'semester' => fake()->randomElement([1, 2, 3, 4, 5, 6]),
        ];
    }
}