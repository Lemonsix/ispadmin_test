<?php

namespace Database\Seeders;

use App\Models\RequirementOrder;
use Illuminate\Database\Seeder;

class RequirementOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequirementOrder::factory()->count(10)->create();
    }
}
