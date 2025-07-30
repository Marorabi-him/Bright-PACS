<?php

namespace Database\Factories;

use App\Models\Clinic;
use App\Models\Modality;
use App\Models\ReferringPhysician;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Study>
 */
class StudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'f_name' => $this->faker->firstName(),
            'l_name' => $this->faker->lastName(),
            'is_male' => $this->faker->boolean(),
            'y_OB' => $this->faker->numberBetween(-25, 25),
            'modality_id' => Modality::inRandomOrder()->value('id'),
            'clinic_id' => Clinic::inRandomOrder()->value('id'),
            'referring_physician_id' => ReferringPhysician::inRandomOrder()->value('id'),
            'status' => $this->faker->randomElement([0, 1, 2]),
        ];
    }
}
