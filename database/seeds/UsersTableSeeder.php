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
            'name' => 'Mr.Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Mr.User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
