<?php

namespace Database\Seeders;

use App\Models\Clinic;
use App\Models\Modality;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modalities = Modality::pluck('id')->toArray();
        Clinic::factory(7)
            ->create()
            ->each(function ($clinic) use ($modalities) {
                $assignedmodalities = collect($modalities)
                    ->random(rand(1, Modality::count()))
                    ->all();
                $clinic->modalities()->attach($assignedmodalities);
            });
    }
}
