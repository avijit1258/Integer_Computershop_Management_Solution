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
        ['name' => 'Router','catagory_id'=> 8],
        ['name' => 'IP camera','catagory_id'=> 8],
        ['name' => 'Lan Card','catagory_id'=>8],
        ['name' => 'Modem','catagory_id'=>8],
        ['name' => 'Wireless Product','catagory_id'=>8],
        ];

        DB::table('sub_catagories')->insert($sub_catagories);
    }
}
