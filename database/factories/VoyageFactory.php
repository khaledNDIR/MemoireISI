<?php

namespace Database\Factories;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voyage>
 */
class VoyageFactory extends Factory
{
    protected $model = Voyage::class;

    public function definition()
    {
        return [
           'nom' => $this->faker->sentence(2),
            'destination' => $this->faker->city,
            'duree' => $this->faker->numberBetween(3, 14), // Durée en jours
            'description' => $this->faker->paragraph(3),
        ];
    }
}
