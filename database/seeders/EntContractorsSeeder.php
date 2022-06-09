<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntContractors;

class EntContractorsSeeder extends Seeder
{
    public function run()
    {
        EntContractors::factory(25)->create();
    }
}
