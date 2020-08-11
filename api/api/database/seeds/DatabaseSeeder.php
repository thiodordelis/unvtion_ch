<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'name' => 'M5',
            'brand' =>  'BMW',
            'year' => 1998
        ]);
        DB::table('cars')->insert([
            'name' => 'RX8',
            'brand' =>  'Mazda',
            'year' => 1997
        ]);
    }
}
