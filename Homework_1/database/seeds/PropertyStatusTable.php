<?php

use Illuminate\Database\Seeder;

class PropertyStatusTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('property_statuses')->where('name','property_status1')->exists()){
            DB::table('property_statuses')->insert([
                'name'=>'property_status1'
            ]);
        }
        if(DB::table('property_statuses')->where('name','property_status2')->exists()){
            DB::table('property_statuses')->insert([
                'name'=>'property_status2'
            ]);
        }
        if(DB::table('property_statuses')->where('name','property_status3')->exists()){
            DB::table('property_statuses')->insert([
                'name'=>'property_status3'
            ]);
        }
    }
}
