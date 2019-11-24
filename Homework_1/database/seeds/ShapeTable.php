<?php

use Illuminate\Database\Seeder;

class ShapeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('shapes')->where('name', 'shape1')->exists()) {
            DB::table('shapes')->insert([
                'name' => 'shape1',
            ]);
        }
        if (!DB::table('shapes')->where('name', 'shape2')->exists()) {
            DB::table('shapes')->insert([
                'name' => 'shape2',
            ]);
        }
        if (!DB::table('shapes')->where('name', 'shape3')->exists()) {
            DB::table('shapes')->insert([
                'name' => 'shape3',
            ]);
        }
    }
}
