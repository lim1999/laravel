<?php

use Illuminate\Database\Seeder;

class ProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *  php artisan db:seed --class=ProductsTable
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'limm',
        ]);
    }
}
