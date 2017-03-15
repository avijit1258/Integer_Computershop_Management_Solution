<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('brands')->delete();
        $brands = [
        ['name' => 'Asus'],
        ['name' => 'D_Link'],
        ['name' => 'Linksys'],
        ['name' => 'Miicronet'],
        ['name' => 'Mikrotik'],

        ['name' => 'Brother'],
        ['name' => 'Canon'],
        ['name' => 'Epson'],
        ['name' => 'Rongta'],
        ['name' => 'Samsung'],
        
        ];

        DB::table('brands')->insert($brands);
    
    }
}
