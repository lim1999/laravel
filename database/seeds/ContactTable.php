<?php

use Illuminate\Database\Seeder;

class ContactTable extends Seeder
{
    /**
     * Run the database seeds.
     *  php artisan db:seed --class=ContactTable
     * @return void
     */
    public function run()
    {
        if(!DB::table('contacts')->where('name','Flexi')->exists()){
            DB::table('contacts')->insert([
                'name'=>'Flexi',
                'phone'=>1111,
            ]);
        };
        if(!DB::table('contacts')->where('name','Flexi1')->exists()){
            DB::table('contacts')->insert([
                'name'=>'Flexi1',
                'phone'=>11111,
            ]);
        };
        if(!DB::table('contacts')->where('name','Flexi2')->exists()){
            DB::table('contacts')->insert([
                'name'=>'Flexi2',
                'phone'=>1111,
            ]);
        };
    }
}
