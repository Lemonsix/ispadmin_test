<?php

namespace Database\Seeders;

use App\Models\Onumodel;
use Illuminate\Database\Seeder;

class OnumodelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Onumodel::create(['name'=>'MONUD401','vendor_id'=>'1','pon'=>'MONU00']);
        Onumodel::create(['name'=>'MONUV601','vendor_id'=>'1','pon'=>'GPON00']);
        Onumodel::create(['name'=>'VSOLD401','vendor_id'=>'1','pon'=>'VSOL00']);
        Onumodel::create(['name'=>'FK-ONT-G420R','vendor_id'=>'2','pon'=>'FISA40']);
    }
}
