<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebTest extends TestCase
{
    /**
     * A basic test example.
     *vendor/bin/phpunit --filter 'tests\\Feature\\WebTest
     * @return void
     */
    public function testProductsCategories()
    {
        $response = $this->get('/products_categories');

        $response->assertStatus(200);
    }
    public function testProductsStatuses(){
        $response=$this->get('/products_statuses');
        $response->assertStatus(200);
    }
    public function testProduct(){
        $response=$this->get('/products');
        $response->assertStatus(200);
    }
}
