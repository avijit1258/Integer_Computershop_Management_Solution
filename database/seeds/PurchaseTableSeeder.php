<?php

use Illuminate\Database\Seeder;

class PurchaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('purchases')->delete();
        $purchases = [
        ['purchase_price' => '2000','vendor_id'=>'1','sale_price' => '4000','product_id'=>'1','date'=>'12/03/17','warrenty'=>'2','quantity'=>'5'],
        ['purchase_price' => '3000' ,'vendor_id'=>'2','sale_price' => '9000','product_id'=>'5','date'=>'20/06/16','warrenty'=>'2','quantity'=>'7'],
        ['purchase_price' => '4000','vendor_id'=>'3','sale_price' => '10000','product_id'=>'10','date'=>'02/01/16','warrenty'=>'08','quantity'=>'19'],
        ['purchase_price' => '12000','vendor_id'=>'4','sale_price' => '14000','product_id'=>'13','date'=>'12/09/16','warrenty'=>'2','quantity'=>'2'],
        ['purchase_price' => '14000','vendor_id'=>'5','sale_price' => '16000','product_id'=>'15','date'=>'25/03/17','warrenty'=>'2','quantity'=>'11'],


        ];

        DB::table('purchases')->insert($purchases);
    }
}
