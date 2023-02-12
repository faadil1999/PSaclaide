<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email_saclay'      => fake()->unique()->safeEmail(),
            'first_name'        => fake()->name(),
            'last_name'         => fake()->name(),
            'password'          => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password
            'email_verified_at' => now(), // vérifié quand l'utilisateur aura rentré le code dans le site
            'studyYear'         => fake()->numberBetween(1,10),
            'speciality'        => fake()->name(),
            'isTeacher'         => true,
            'nbCoursesGiven'    => fake()->numberBetween(0,100),
            'nbCoursesReceived' => fake()->numberBetween(0,100),
            'sumGrades'         => fake()->numberBetween(0,500),
            'avgGrades'         => fake()->randomFloat(1,0,5),
            'balance'           => fake()->randomFloat(1,0,100),
            'remember_token'    => Str::random(10),
            'departement_id'    => fake()->numberBetween(1,5)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
