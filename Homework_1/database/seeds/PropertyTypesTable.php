<?php

use Illuminate\Database\Seeder;

class PropertyTypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('property_types')->where('name', 'property_types1')->exists()) {
            DB::table('property_types')->insert([
                'name' => 'property_types1',
            ]);
        }
        if (!DB::table('property_types')->where('name', 'property_types2')->exists()) {
            DB::table('property_types')->insert([
                'name' => 'property_types2',
            ]);
        }
        if (!DB::table('property_types')->where('name', 'property_types3')->exists()) {
            DB::table('property_types')->insert([
                'name' => 'property_types3',
            ]);
        }
        
    }
}
