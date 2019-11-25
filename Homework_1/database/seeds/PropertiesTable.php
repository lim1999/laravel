<?php

use Illuminate\Database\Seeder;

class PropertiesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('properties')->where('name', 'properties1')->exists()) {
            DB::table('properties')->insert([
                'name' => 'properties1',
            ]);
        }
        if (!DB::table('properties')->where('name', 'properties2')->exists()) {
            DB::table('properties')->insert([
                'name' => 'properties2',
            ]);
        }
        if (!DB::table('properties')->where('name', 'properties3')->exists()) {
            DB::table('properties')->insert([
                'name' => 'properties3',
            ]);
        }
    }
}
