<?php

use App\User;
use Carbon\Carbon;
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
        User::create([
            'role_id' => '1',
            'name' => 'Abdul Rosyid',
            'username' => 'abdulrosyid',
            'email' => 'hi@abdulrosyid.com',
            'password' => bcrypt('admin')
        ]);
            
        User::create([
            'role_id' => '1',
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Rosyid Abdul',
            'username' => 'rosyidabdul',
            'email' => 'dev.abdulrosyid@gmail.com',
            'password' => bcrypt('user'),
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Rosyid Abdul',
            'username' => 'rosyidabdul',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
        ]);
    }
}
