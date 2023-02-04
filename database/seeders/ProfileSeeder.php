<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(['name'=>'oLD3032-2-VSOL']);
        Profile::create(['name'=>'oPPP25M926_VSOL_BR']);
        Profile::create(['name'=>'oNODO-EDIFICIO']);
        Profile::create(['name'=>'oPPP25M925_VSOL_BR']);
    }
}
