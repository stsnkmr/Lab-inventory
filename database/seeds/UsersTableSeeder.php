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
            'role' => '1',
        ];
        DB::table('users')->insert($param);
    }
}
