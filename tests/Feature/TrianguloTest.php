<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrianguloTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function listAllTriangulos()
    {
        $response = $this->get('/api/triangulos');

        $response->assertStatus(200);
    }
}
