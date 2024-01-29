<?php

namespace Tests\Feature\api;

use Tests\TestCase;

class EndpointSuccessTest extends TestCase
{
    /** @test */
    public function check_if_endpoint_return_is_successefully(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get('http://localhost/api/v1/cnt/6201500');

        $this->assertNotEmpty($response);

        $this->assertStringContainsString('cnae_code', $response->content());
    }
}
