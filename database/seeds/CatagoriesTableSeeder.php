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
        ['name' => 'Notebook'],
        ['name' => 'Dekstop'],
        ['name' => 'Phone & Tablet'],
        ['name' => 'Printer, Copier & Scanner'],
        ['name' => 'Projector'],
        ['name' => 'Peripherals'],
        ['name' => 'Software'],
        ['name' => 'Networking'],
        ['name' => 'Enterprise Solution'],

        ];

        DB::table('catagories')->insert($catagories);
    }
}
