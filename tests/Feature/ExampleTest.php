<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *vendor/bin/phpunit --filter 'tests\\Feautes\\ExampleTest
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
