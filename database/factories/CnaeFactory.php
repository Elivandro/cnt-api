<?php

namespace Database\Factories;

use App\Models\Cnae;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cnae>
 */
class CnaeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cnae_code' => '6201-5/00',
            'cnae_description' => 'Desenvolvimento de programas de computador sob encomenda'
        ];
    }
}
