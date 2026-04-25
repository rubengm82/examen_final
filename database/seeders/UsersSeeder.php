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
                'name' => 'Ruben',
                'last_name' => 'Gallardo',
                'age' => 44,
                'email' => 'ruben@email.com',
                'password' => '1234',
            ],
            [
                'name' => 'Juan',
                'last_name' => 'García',
                'age' => 25,
                'email' => 'juan@email.com',
                'password' => '1234',
            ],
            [
                'name' => 'Maria',
                'last_name' => 'López',
                'age' => 28,
                'email' => 'maria@email.com',
                'password' => '1234',
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