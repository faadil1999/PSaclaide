<?php

namespace Database\Factories;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'       => fake()->word,
            'description' => fake()->word,
            'author'      => fake()->word,
            'isAvailable' => fake()->boolean,
            'isIndividual'=> fake()->boolean,
            'horaire'     => fake()->datetime,
            'matiere_id'  => fake()->numberBetween(1,5),
            'user_id'     => fake()->numberBetween(1,10)   
        ];
    }
}
