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
        if (!DB::table('property_statuses')->where('name', 'property_statuses1')->exists()) {
            DB::table('property_statuses')->insert([
                'name' => 'property_statuses1',
            ]);
        }
        if (!DB::table('property_statuses')->where('name', 'property_statuses2')->exists()) {
            DB::table('property_statuses')->insert([
                'name' => 'property_statuses2',
            ]);
        }
        if (!DB::table('property_statuses')->where('name', 'property_statuses3')->exists()) {
            DB::table('property_statuses')->insert([
                'name' => 'property_statuses3',
            ]);
        }
    }
}
