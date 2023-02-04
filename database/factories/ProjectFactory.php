<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return arrayProyecto	Material	Cantidad	Proveedor

     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2,true),
            'description' => $this->faker->word(8,true)
        ];
    }
}
