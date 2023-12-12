<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShowRouteTest extends TestCase
{
    /** @test */
    public function test_if_endpoint_is_ok_end_return_datas(): void
    {
        $response = $this->get('http://localhost/api/v1/cnt/9511800');

        $response->assertStatus(500);
    }
}
