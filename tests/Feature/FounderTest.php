<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FounderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_founder()
    {
        $response = $this->get('/api/founder');

        $response->assertStatus(200);
    }
}
