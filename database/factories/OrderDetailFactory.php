<?php

namespace Database\Factories;

use App\Models\MaterialProvider;
use App\Models\Project;
use App\Models\RequirementOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'requirement_order_id' => RequirementOrder::inRandomOrder()->first()->id,
            'project_id' => Project::inRandomOrder()->first()->id,
            'material_provider_id'=> MaterialProvider::inRandomOrder()->first()->id,
            'qty'=>$this->faker->randomNumber(2)
        ];
    }
}
