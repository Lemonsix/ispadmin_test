<?php

namespace Database\Seeders;

use App\Models\Onu;
use App\Models\Onumodel;
use Illuminate\Database\Seeder;

class OnuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Onu::create(["sn"=>"483b19","onumodel_id"=>Onumodel::where("pon","MONU00")->first()->id,"profile_id"=>1]);
    }
}
