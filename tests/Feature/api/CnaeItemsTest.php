<?php

namespace Tests\Feature\api;

use App\Models\Cnae;
use App\Models\CnaeItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CnaeItemsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function check_cnae_item_table_exists_and_persists_and_delete_datas(): void
    {
        $this->withoutExceptionHandling();

        Cnae::factory()->create([
            'cnae_code' => '6201-5/00',
            'cnae_description' => 'Desenvolvimento de programas de computador sob encomenda'
        ]);

        $cnaeItem = CnaeItem::factory()->create([
            'cnae_id' => 1,
            'cnae_item' => '01.01',
            'item_description' => 'Análise e desenvolvimento de sistemas.'
        ]);

        $this->assertDatabaseHas('cnae_items', [
            'cnae_id' => 1,
            'cnae_item' => '01.01',
            'item_description' => 'Análise e desenvolvimento de sistemas.'
        ])
            ->assertDatabaseCount('cnae_items', 1);

        $cnaeItem->delete();

        $this->assertDatabaseMissing('cnae_items', [
            'cnae_id' => 1,
            'cnae_item' => '01.01',
            'item_description' => 'Análise e desenvolvimento de sistemas.'
        ]);
    }
}
