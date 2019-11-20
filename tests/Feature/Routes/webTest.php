<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class webTest extends TestCase
{
    /**
     * A basic feature test example.
     *vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\webTest'
     * @return void
     */
    public function productCategories()
    {
        $response = $this->get('/product_categories');

        $response->assertStatus(200);
    }
    public function productStatuses()
    {
        $response = $this->get('/product_statuses');

        $response->assertStatus(200);
    }
    public function products()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
}
