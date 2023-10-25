<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formations>
 */
class FormationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => $this->faker->name(),
         
            'dateDebut' => $this->faker->date(),
            'dateFin' => $this->faker->date(),
           
            'active' => false,
           'description'=>$this->faker->sentence(4,true),
            'dure' => $this->faker->time(),
        ];
    }
}
