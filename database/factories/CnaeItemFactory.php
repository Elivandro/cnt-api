<?php

namespace Database\Factories;

use App\Models\Cnae;
use App\Models\CnaeItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CnaeItem>
 */
class CnaeItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cnae_id' => Cnae::inRandomOrder()->first()->id,
            'cnae_item' => '01.01',
            'item_description' => 'Análise e desenvolvimento de sistemas.'
        ];
    }
}
