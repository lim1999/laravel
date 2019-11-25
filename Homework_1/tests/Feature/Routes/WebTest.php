<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebTest extends TestCase
{
    /**
     * A basic feature test example.
     *  vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
     * @return void
     */
    public function testProperty()
    {
        $response = $this->get('/property');

        $response->assertSuccessful();
    }
    // public function testPropertyType()
    // {
    //     $response = $this->get('/property-type');

    //     $response->assertStatus(200);
    // }
    // public function testPropertyStatues()
    // {
    //     $response = $this->get('/property-status');

    //     $response->assertStatus(200);
    // }
    // public function testShape()
    // {
    //     $response = $this->get('/shape');

    //     $response->assertStatus(200);
    // }
    // public function testZone()
    // {
    //     $response = $this->get('/zone');

    //     $response->assertStatus(200);
    // }
    // public function testPropertyPriceHistory()
    // {
    //     $response = $this->get('/property-price-history');

    //     $response->assertStatus(200);
    // }

}
