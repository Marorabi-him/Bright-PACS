<?php

namespace Database\Seeders;

use App\Models\Study;
use Illuminate\Database\Seeder;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Study::factory()->count(100)->create();
    }
}
