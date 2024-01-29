<?php

namespace Tests\Feature\api;

use Tests\TestCase;

class EndpointErrorTest extends TestCase
{
    /** @test */
    public function check_if_endpoit_return_error_message(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/api/v1/cnt/9511800');

        $response->assertStatus(404)
            ->assertJson([
                'message' => 'cnae not found'
            ]);
    }
}
