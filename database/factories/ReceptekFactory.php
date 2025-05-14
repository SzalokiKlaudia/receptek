<?php

namespace Database\Factories;

use App\Models\Kategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receptek>
 */
class ReceptekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nev'=>fake()->sentence(3),
            'kat_id'=>Kategoria::all()->random()->id,
            'kep_eleresi_ut'=>fake()->url(),
            'leiras'=>fake()->sentence()
            
        ];
    }
}
