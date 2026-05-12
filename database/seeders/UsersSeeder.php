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
                'email' => 'admin@email.com',
                'password' => 'admin',
                'role' => 'admin',
            ],
            [
                'name' => 'Yoel',
                'last_name' => 'Berjaga',
                'age' => 25,
                'email' => 'user@email.com',
                'password' => 'user',
                'role' => 'user',
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
