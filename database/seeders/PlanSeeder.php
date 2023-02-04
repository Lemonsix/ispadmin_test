<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create(['name'=>'Fibra 25mb','service_type'=>'FTTH','download'=>'26000','upload'=>'6000']);
        Plan::create(['name'=>'Fibra 50mb','service_type'=>'FTTH','download'=>'51000','upload'=>'11000']);
        Plan::create(['name'=>'Fibra 100mb','service_type'=>'FTTH','download'=>'101000','upload'=>'15000']);
        Plan::create(['name'=>'Wifi 3mb','service_type'=>'WIFI','download'=>'3000','upload'=>'500']);
    }
}
