<?php

namespace Tests\Feature\Acessors;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AcessorGetTest extends TestCase
{
    /**
     * A basic feature test example.
     *  vendor/bin/phpunit --filter 'tests\\Feature\\Acessors\\AcessorGetTest'
     * @return void
     */
    public function testCode()
    {
        $product=Product::find(11);
        $expact=0011;
        $this->assertEquals($expact,$product->Code);

        
    }
}
