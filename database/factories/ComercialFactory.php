<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComercialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comercial' => $this->faker->name(),
        ];
    }
}
