<?php

use Illuminate\Database\Seeder;

class Product_StatusTable extends Seeder
{
    /**
     * Run the database seeds.
     *  php artisan db:seed --class=Product_StatusTable
     * @return void
     */
    public function run()
    {
        if(!DB::table('product_statuses')->where('name','Draft')->exists()){
            DB::table('product_statuses')->insert([
                'name'=>'Draft',
            ]);
        };
        if(!DB::table('product_statuses')->where('name','Public')->exists()){
            DB::table('product_statuses')->insert([
                'name'=>'Public',
            ]);
        };
    }
}
