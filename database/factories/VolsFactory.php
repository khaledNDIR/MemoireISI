<?php

namespace Database\Factories;

use App\Models\Vols;
use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vol>
 */
class VolsFactory extends Factory
{
    protected $model = Vols::class;

    public function definition()
    {
        return [
            'voyage_id' => Voyage::factory(), // Associe chaque vol à un voyage
            'compagnie_aerienne' => $this->faker->company,
            'aeroport_depart' => $this->faker->city,
            'aeroport_destination' => $this->faker->city,
            'heure_depart' => $this->faker->dateTimeBetween('now', '+1 week'),
            'heure_arrivee' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'prix' => $this->faker->numberBetween(100, 1500),
        ];
    }
}
