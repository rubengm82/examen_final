<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $cars = [
            [
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'year' => 2022,
                'color' => 'Rojo',
                'license_plate' => '1234ABC',
                'user_id' => $user->id,
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'year' => 2021,
                'color' => 'Azul',
                'license_plate' => '5678DEF',
                'user_id' => $user->id,
            ],
            [
                'brand' => 'Ford',
                'model' => 'Focus',
                'year' => 2020,
                'color' => 'Blanco',
                'license_plate' => '9012GHI',
                'user_id' => $user->id,
            ],
        ];

        foreach ($cars as $carData) {
            Car::updateOrCreate(
                ['license_plate' => $carData['license_plate']],
                $carData
            );
        }
    }
}