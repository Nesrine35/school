<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enseignants>
 */
class EnseignantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'address' => $this->faker->sentence(),
            'specialite' => $this->faker->sentence(),
            'dateNaissance' => $this->faker->date(),
         
           
          
            'telephone'=>'0663860406',
           
            'email' => fake()->unique()->email(),
          
        ];
    }
}
