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
                'role' => 'admin',
            ],
            [
                'name' => 'Juan',
                'last_name' => 'García',
                'age' => 25,
                'email' => 'juan@email.com',
                'password' => '1234',
                'role' => 'test',
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
