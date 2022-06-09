<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EntContractorsFactory extends Factory
{
    public function definition()
    {
        return [

            'user_id' => User::factory(),

            'full_name' => Str::random(10),
            'short_name' => $this->faker->unique()->name(),
            'full_legal_form' => $this->faker->word(),
            'short_legal_form' => $this->faker->word(),

            'ogrn' => $this->faker->randomNumber(6, true),
            'ogrn_date' => $this->faker->date('Y_m_d'),
            'inn' => $this->faker->randomNumber(6, true),
            'kpp' => $this->faker->randomNumber(6, true),

            'leg_adr_postal_code' => $this->faker->randomNumber(6, true),
            'leg_adr_region' => $this->faker->word(),
            'leg_adr_disctrict' => $this->faker->word(),
            'leg_adr_city' => $this->faker->word(),
            'leg_adr_street' => $this->faker->word(),
            'leg_adr_house' => $this->faker->randomNumber(2, true),
            'leg_adr_structure' => $this->faker->randomNumber(2, true),
            'leg_adr_office' => $this->faker->randomNumber(2, true),

            'postal_adr_postal_code' => $this->faker->randomNumber(6, true),
            'postal_adr_region' => $this->faker->word(),
            'postal_adr_disctrict' => $this->faker->word(),
            'postal_adr_city' => $this->faker->word(),
            'postal_adr_street' => $this->faker->word(),
            'postal_adr_house' => $this->faker->randomNumber(2, true),
            'postal_adr_structure' => $this->faker->randomNumber(2, true),
            'postal_adr_office' => $this->faker->randomNumber(2, true),

            'ceo_post' => $this->faker->word(),
            'ceo_surname' => $this->faker->word(),
            'ceo_name' => $this->faker->word(),
            'ceo_patronymic' => $this->faker->word(),

            'contact_post' => $this->faker->word(),
            'contact_surname' => $this->faker->word(),
            'contact_name' => $this->faker->word(),
            'contact_patronymic' => $this->faker->word(),
            'contact_email' => $this->faker->word(),
            'contact_tel' => $this->faker->randomNumber(6, true),

        ];
    }
}
