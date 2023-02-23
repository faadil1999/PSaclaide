<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AnnonceSousmatiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'annonce_id'      => fake()->numberBetween(1,15),
            'sous_matiere_id' => fake()->numberBetween(1,15) 
        ];
    }
}
