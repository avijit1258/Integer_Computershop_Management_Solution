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
        ['name' => 'HP'],
        ['name' => 'Microsoft'],
        ['name' => 'Adobe'],
        ['name' => 'Fujitsu'],
        ['name' => 'Dell'],
        ['name' => 'Canon'],
        ['name' => 'Epson'],
        ['name' => 'Apple'],
        ['name' => 'Samsung'],
        
        ];

        DB::table('brands')->insert($brands);
    
    }
}
