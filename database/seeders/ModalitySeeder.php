<?php

namespace Database\Seeders;

use App\Models\Modality;
use Illuminate\Database\Seeder;

class ModalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modalities = ['CT', 'MRI', 'X-ray', 'Ultrasound', 'PET', 'Mammography'];

        foreach ($modalities as $name) {
            Modality::create(['name' => $name]);
        }
    }
}
