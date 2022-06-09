<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IndContractorsFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'surName' => $this->faker->unique()->name(),
            'user_id' => User::factory(),
            'patronymic' => Str::random(10),

            'birth_certificate_series' => $this->faker->randomNumber(4, true),
            'birth_certificate_number' => $this->faker->randomNumber(6, true),
            'birth_certificate_date_of_issue' => $this->faker->date('Y_m_d'),
            'birth_sertificate_marriage_registry' => $this->faker->word(),

            'passport_series' => $this->faker->randomNumber(1, true),
            'passport_number' => $this->faker->randomNumber(2, true),

            'passport_migration_department' => $this->faker->word(),
            'passport_date_of_issue' => $this->faker->date('Y_m_d'),
            'passport_division_code' => $this->faker->randomNumber(6, true),

            'birth_date' => $this->faker->date('Y_m_d'),
            'birth_place' => $this->faker->word(),

            'contractor_email' => $this->faker->unique()->safeEmail(),
            'contractor_tel' => $this->faker->randomNumber(6, true),

            'int_passport_series' => $this->faker->randomNumber(4, true),
            'int_passport_number' => $this->faker->randomNumber(6, true),
            'int_passport_date_of_issue' => $this->faker->date('Y_m_d'),
            'int_passport_migration_department' => $this->faker->unique()->text(),


            'inn' => $this->faker->randomNumber(5, true),
            'snils' => $this->faker->randomNumber(5, true)
        ];
    }
}
