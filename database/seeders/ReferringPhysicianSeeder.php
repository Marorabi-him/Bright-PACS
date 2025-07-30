<?php

namespace Database\Seeders;

use App\Models\ReferringPhysician;
use Illuminate\Database\Seeder;

class ReferringPhysicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReferringPhysician::factory()->count(10)->create();
    }
}
