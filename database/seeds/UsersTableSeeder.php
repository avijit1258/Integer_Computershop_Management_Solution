<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
        [
            'name' => 'Avijit Bhattacharjee',
            'email' => 'avijit@cseku.com',
            'role' => 'owner',
            'active' => 1,
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'Nadira Khatun'
            'email' => 'nadira@cseku.com',
            'role' => 'sells_man',
            'active' => 1,
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'Rahad Mannan'
            'email' => 'rahad@cseku.com',
            'role' => 'stock_manager',
            'active' => 1,
            'password' => bcrypt('123456'),

        ],
        ];
        DB::table('users')->insert($users);
        
    }
}
