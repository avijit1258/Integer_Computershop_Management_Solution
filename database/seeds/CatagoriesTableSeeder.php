<?php

use Illuminate\Database\Seeder;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catagories')->delete();
        $catagories = [
        ['name' => 'Network'],
        ['name' => 'INK Printer'],
        ['name' => 'Dekstop'],
        ['name' => 'Android'],
        ['name' => 'Components'],


        ];

        DB::table('catagories')->insert($catagories);
    }
}
