<?php

namespace Database\Seeders;

use App\Models\Clinic;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRoleId = Role::query()->where('name', 'Finance/Admin')->first()->id;
        $itRoleId = Role::query()->where('name', 'IT')->first()->id;

        Clinic::all()->each(function ($clinic) use ($adminRoleId, $itRoleId) {
            $admin = User::factory()->create([
                'role_id' => $adminRoleId,
                'email' => fake()->unique()->safeEmail(),
            ]);

            $it = User::factory()->create([
                'role_id' => $itRoleId,
                'email' => fake()->unique()->safeEmail(),
            ]);

            $clinic->users()->attach([$admin->getKey(), $it->getKey()]);
        });
    }
}
