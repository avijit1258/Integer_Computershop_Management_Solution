<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
        $this->call(ProductesTableSeeder::class);
        $this->call(CatagoriesTableSeeder::class);
        $this->call(SubCatagoriesTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        

    }
}
