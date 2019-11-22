<?php

namespace Tests\Feature\Acessors;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AcessorGetTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCode()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
