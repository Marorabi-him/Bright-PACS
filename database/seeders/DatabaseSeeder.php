<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            ModalitySeeder::class,
            ClinicSeeder::class,
            UserSeeder::class,
            DoctorSeeder::class,
            ReferringPhysicianSeeder::class,
            StudySeeder::class,
        ]);
    }
}
