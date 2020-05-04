<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Abdul Rosyid',
            'username' => 'abdulrosyid',
            'email' => 'abdulrosyidit@gmail.com',
            'password' => bcrypt('amikom123'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Rosyid Abdul',
            'username' => 'rosyidabdul',
            'email' => 'rosyidabdul@gmail.com',
            'password' => bcrypt('amikom123'),
        ]);
    }
}
