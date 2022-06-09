<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IndContractors;

class IndContractorsSeeder extends Seeder
{
    public function run()
    {
        IndContractors::factory(25)->create();
    }
}
