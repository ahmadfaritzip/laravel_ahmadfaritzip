<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RumahSakit>
 */
class RumahSakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_rumah_sakit'  => $this->faker->name(),
            'email'             => $this->faker->unique()->safeEmail(),
            'alamat'            => $this->faker->address(),
            'telp'              => $this->faker->phoneNumber()
        ];
    }
}
