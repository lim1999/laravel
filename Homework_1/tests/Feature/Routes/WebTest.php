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
        $user=\Auth::loginUsingId(1);
        $response = $this->actingAs($user)->get('/property');
        $response->assertSuccessful();
    }
    public function testPropertyType()
    {
        $user=\Auth::loginUsingId(1);
        $response = $this->actingAs($user)->get('/property-type');
        $response->assertSuccessful();
    }
    public function testPropertyStatus()
    {
        $user=\Auth::loginUsingId(1);
        $response = $this->actingAs($user)->get('/property-status');
        $response->assertSuccessful();
    }
    public function testShape()
    {
        $user=\Auth::loginUsingId(1);
        $response = $this->actingAs($user)->get('/shape');
        $response->assertSuccessful();
    }
    public function testZone()
    {
        $user=\Auth::loginUsingId(1);
        $response = $this->actingAs($user)->get('/zone');
        $response->assertSuccessful();
    }
    public function testPropertyPriceHistory()
    {
        $user=\Auth::loginUsingId(1);
        $response = $this->actingAs($user)->get('/property-price-history');
        $response->assertSuccessful();
    }

    

}
