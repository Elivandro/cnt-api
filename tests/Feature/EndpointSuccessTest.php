<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EndpointSuccessTest extends TestCase
{
    /** @test */
    public function check_if_endpoint_return_is_successefully(): void
    {
        $this->withoutExceptionHandling();

        $url = 'http://localhost/api/v1/cnt/9511800';

        $response = file_get_contents($url);

        $this->assertNotEmpty($response);

        $this->assertStringContainsString('cnae_code', $response);
    }
}
