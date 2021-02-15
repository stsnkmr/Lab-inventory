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
        $param = [
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('secretsecret'),
            'role' => '2',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('secretsecret'),
            'role' => '3',
        ];
        DB::table('users')->insert($param);
    }
}
