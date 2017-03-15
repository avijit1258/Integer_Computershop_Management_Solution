<?php

use Illuminate\Database\Seeder;

class ProductesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->delete();
        $products = [
        ['brand_id' => '1','sub_catagory_id'=>'1','details' => 'Net to use','specification'=>'well done','model'=>'abc1', 'updated_by' => '1'],
        ['brand_id' => '2' ,'sub_catagory_id'=>'2','details' => 'How to use','specification'=>'work to do','model'=>'def2', 'updated_by' => '1'],
        ['brand_id' => '3','sub_catagory_id'=>'3','details' => 'What to use','specification'=>'Good work','model'=>'ghi3', 'updated_by' => '1'],
        ['brand_id' => '4','sub_catagory_id'=>'4','details' => 'Try to use','specification'=>'true say','model'=>'jkl4', 'updated_by' => '1'],
        ['brand_id' => '5','sub_catagory_id'=>'5','details' => 'Use now','specification'=>'work','model'=>'mno5', 'updated_by' => '1'],

        ];

        DB::table('products')->insert($products);
    }
}
