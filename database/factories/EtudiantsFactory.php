<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiants>
 */
class EtudiantsFactory extends Factory
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
         
           
            'lieuNaissance' => $this->faker->sentence(),
            'telephone'=>'0557613877',
                       
            'email' => fake()->unique()->email(),
        ];
    }
}
