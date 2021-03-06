<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebTest extends TestCase
{
    /**
     * A basic test example.
     *vendor/bin/phpunit --filter 'tests\\Feature\\Routes\\WebTest'
     * @return void
     */
    public function testProductsCategories()
    {
        $response = $this->get('/productsCategories');

        $response->assertStatus(200);
    }
    public function testProductsStatuses(){
        $response=$this->get('/prductsStatuses');
        $response->assertStatus(200);
    }
    public function testProduct(){
        $response=$this->get('Front\products');
        $response->assertStatus(200);
    }
    // public function testCode()
    // {
    //     $product=Product::find(16);
    //     $expact="0016";
    //     $this->assertEquals($expact,$product->Code);   
    // }
}
