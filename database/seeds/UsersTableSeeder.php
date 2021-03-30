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
        $only = ['name', 'password', 'student_number', 'email_verified_at', 'remember_token', 'role'];
        App\User::firstOrCreate(
            ['email' => 'admin@example.com'],
            factory(App\User::class)->make([
                'role' => 2,
                'password' => '$2y$10$PN9x/eygIAmYKfkGRwP/s.KBgsLczPsofi0JSUxfbfquQpOEh94RW'
            ])->only($only)
        );
        App\User::firstOrCreate(
            ['email' => 'user@example.com'],
            factory(App\User::class)->make([
                'role' => 3,
                'password' => '$2y$10$PN9x/eygIAmYKfkGRwP/s.KBgsLczPsofi0JSUxfbfquQpOEh94RW'
            ])->only($only)
        );
    }
}
