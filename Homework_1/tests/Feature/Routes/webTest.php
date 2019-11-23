<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class webTest extends TestCase
{
    /**
     * A basic feature test example.
     *  vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
     * @return void
     */
    public function testPropertyTypes()
    {
        $response = $this->get('/property-type');

        $response->assertSuccessful();
    }
    public function testPropertyStatuses()
    {
        $response = $this->get('/property-status');

        $response->assertSuccessful();
    }
    public function testZone()
    {
        $response = $this->get('/zone');

        $response->assertSuccessful();
    }
    public function testShapes()
    {
        $response = $this->get('/shape');

        $response->assertSuccessful();
    }
    public function testProperties()
    {
        $response = $this->get('/property');

        $response->assertSuccessful();
    }
    public function testPropertyPriceHistories()
    {
        $response = $this->get('/property-price-history');

        $response->assertSuccessful();
    }

}
