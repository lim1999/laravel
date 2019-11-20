<?php

use Illuminate\Database\Seeder;

class Prodcut_CategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *  php artisan db:seed --class=Prodcut_CategoriesTable
     * @return void
     */
    public function run()
    {
        if(!DB::table('Product_Categories')->where('name','Phone')->exists()){
            DB::table('Product_Categories')->insert([
                'name'=>'Phone',
            ]);
        };
        if(!DB::table('Product_Categories')->where('name','Speaker')->exists()){
            DB::table('Product_Categories')->insert([
                'name'=>'Speaker', 'create_at'=>'111',
            ]);
        };
        if(!DB::table('Product_Categories')->where('name','tablet')->exists()){
            DB::table('Product_Categories')->insert([
                'name'=>'tablet',
            ]);
        };
    }
}
