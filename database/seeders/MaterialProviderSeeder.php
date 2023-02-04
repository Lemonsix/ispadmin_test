<?php

namespace Database\Seeders;

use App\Models\MaterialProvider;
use Illuminate\Database\Seeder;

class MaterialProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaterialProvider::factory()->count(3)->create();
    }
}
