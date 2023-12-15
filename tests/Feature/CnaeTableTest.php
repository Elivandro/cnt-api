<?php

namespace Tests\Feature;

use App\Models\Cnae;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CnaeTableTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function check_if_table_cnae_exists_and_if_receive_datas_and_delete_datas(): void
    {
        $this->withoutExceptionHandling();

        $cnae = Cnae::factory()->create([
            'cnae_code' => '6201-5/00',
            'cnae_description' => 'Desenvolvimento de programas de computador sob encomenda'
        ]);

        $this->assertDatabaseCount('cnaes', 1);

        $this->assertDatabaseHas('cnaes', [
                'cnae_code' => '6201-5/00',
                'cnae_description' => 'Desenvolvimento de programas de computador sob encomenda'
            ]
        );

        $cnae->delete();

        $this->assertDatabaseMissing('cnaes', [
            'cnae_code' => '6201-5/00',
            'cnae_description' => 'Desenvolvimento de programas de computador sob encomenda'
        ]);
    }
}
