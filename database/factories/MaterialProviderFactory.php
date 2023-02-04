<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Throwable;

class MaterialProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   return [
            'material_id'=>$this->faker->randomNumber(1),
            'provider_id'=>$this->faker->randomNumber(1)
            ];

    }
}
