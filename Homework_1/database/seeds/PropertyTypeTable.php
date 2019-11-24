<?php

use Illuminate\Database\Seeder;

class PropertyTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('property_types')->where('name','property_type1')->exists()){
            DB::table('property_types')->insert([
                'name'=>'property_type1'
            ]);
        }
        if(DB::table('property_types')->where('name','property_type2')->exists()){
            DB::table('property_types')->insert([
                'name'=>'property_type2'
            ]);
        }
        if(DB::table('property_types')->where('name','property_type3')->exists()){
            DB::table('property_types')->insert([
                'name'=>'property_type3'
            ]);
        }
    }
}
