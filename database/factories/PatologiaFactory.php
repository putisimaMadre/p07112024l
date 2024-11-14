<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatologiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "diabetes" => $this->faker->sentence(1),
            "hipertensionA",
            "cardiopatias",
            "neoplasias",
            "epilepsia",
            "malformaciones",
            "sida",
            "enfermedadesR",
            "hepatitis",
            "artritis",
            "entidad",
            "otra",
            "aparentementeS",
        ];
    }
}
