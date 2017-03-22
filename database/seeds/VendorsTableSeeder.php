<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vendors')->delete();
        $vendors = [
        ['name' => 'Avijit Bhattachajee','adress'=>'sekhpara','contact_number' => '01715183810'],

        ['name' => 'Mredul Hasan','adress'=>'Raipara','contact_number' => '01675143658'],
        ['name' => 'Arif Imran ','adress'=>'Mirapur','contact_number' => '01615100235'],
        ['name' => 'Sumit Kumar Saha','adress'=>'Gollamari','contact_number' => '01785185810'],
       

        ];

        DB::table('vendors')->insert($vendors);
    }
}
