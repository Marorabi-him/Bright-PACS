<?php

namespace Database\Seeders;

use App\Models\Clinic;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctorRoleId = Role::where('name', 'Doctor')->first()->id;
        $clinicIds = Clinic::pluck('id')->toArray();

        User::factory(15)->create([
            'role_id' => $doctorRoleId,
        ])->each(function ($doctor) use ($clinicIds) {
            $assignedClinics = collect($clinicIds)->random(rand(1, 3))->all();
            $doctor->clinics()->attach($assignedClinics);
        });
    }
}
