<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'name' => $this->faker->company(),
            'cuit' => '30'.strval($this->faker->randomNumber(8,true)).'9'
        ];
    }
}
