<?php

namespace Tests\Feature\Acessors;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class AcessorGetTest extends TestCase
{
    /**
     * A basic feature test example.
     *  vendor/bin/phpunit --filter 'Tests\\Feature\\Acessors\\AcessorGetTest'
     * @return void
     */
    public function testCode()
    {
        $product = new Product([
           'id' => 16,
           'name' => 'asd'
        ]);
        $expact="0016";

        $this->assertEquals($expact,$product->Code);

        $expact="as";
        $this->assertEquals($expact,$product->name);

        
    }
}
