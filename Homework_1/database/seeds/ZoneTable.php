<?php

use Illuminate\Database\Seeder;

class ZoneTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('zones')->where('name', 'zone1')->exists()) {
            DB::table('zones')->insert([
                'name' => 'zone1',
            ]);
        }
        if (!DB::table('zones')->where('name', 'zone2')->exists()) {
            DB::table('zones')->insert([
                'name' => 'zone2',
            ]);
        }
        if (!DB::table('zones')->where('name', 'zone3')->exists()) {
            DB::table('zones')->insert([
                'name' => 'zone3',
            ]);
        }
    }
}
