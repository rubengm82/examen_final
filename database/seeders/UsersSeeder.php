<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'last_name' => 'Sistema',
                'age' => 30,
                'email' => 'admin@email.com',
                'password' => 'admin123',
            ],
            [
                'name' => 'Juan',
                'last_name' => 'García',
                'age' => 25,
                'email' => 'user@email.com',
                'password' => 'user123',
            ],
            [
                'name' => 'Maria',
                'last_name' => 'López',
                'age' => 28,
                'email' => 'maria@email.com',
                'password' => 'password',
            ],
        ];

        foreach ($users as $userData) {
            User::updateOrCreate(
                ['email' => $userData['email']],
                $userData
            );
        }
    }
}