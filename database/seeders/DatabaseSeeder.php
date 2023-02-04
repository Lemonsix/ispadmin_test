<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProfileSeeder::class,
            VendorSeeder::class,
            OnumodelSeeder::class,
            OnuSeeder::class,
            PlanSeeder::class,
            ProjectSeeder::class,
            ProviderSeeder::class,
            MaterialSeeder::class,
            MaterialProviderSeeder::class,
            RequirementOrderSeeder::class,
            OrderDetailSeeder::class
        ]);
    }
}
