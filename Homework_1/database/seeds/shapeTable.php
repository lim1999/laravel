<?php

use Illuminate\Database\Seeder;

class shapeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('shapes')->where('name', 'shapes1')->exists()) {
            DB::table('shapes')->insert([
                'name' => 'shapes1',
            ]);
        }
        if (!DB::table('shapes')->where('name', 'shapes2')->exists()) {
            DB::table('shapes')->insert([
                'name' => 'shapes2',
            ]);
        }
        if (!DB::table('shapes')->where('name', 'shapes3')->exists()) {
            DB::table('shapes')->insert([
                'name' => 'shapes3',
            ]);
        }
    }
}
