<?php

use Illuminate\Database\Seeder;

class SubCatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         DB::table('sub_catagories')->delete();
        $sub_catagories = [
        ['name' => 'Router','catagory_id'=>'1'],
        ['name' => 'All Printers','catagory_id'=>'2'],
        ['name' => 'Brand Dekstop','catagory_id'=>'3'],
        ['name' => 'All Brands','catagory_id'=>'4'],
        ['name' => 'Processors','catagory_id'=>'5'],
        ];

        DB::table('sub_catagories')->insert($sub_catagories);
    }
}
