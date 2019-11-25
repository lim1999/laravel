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
        if (!DB::table('zones')->where('name', 'zones1')->exists()) {
            DB::table('zones')->insert([
                'name' => 'zones1',
            ]);
        }
        if (!DB::table('zones')->where('name', 'zones2')->exists()) {
            DB::table('zones')->insert([
                'name' => 'zones2',
            ]);
        }
        if (!DB::table('zones')->where('name', 'zones3')->exists()) {
            DB::table('zones')->insert([
                'name' => 'zones3',
            ]);
        }
    }
}
