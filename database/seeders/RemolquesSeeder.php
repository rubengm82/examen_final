<?php

namespace Database\Seeders;

use App\Models\Remolque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RemolquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $remolques = [
            [
                'model' => 'Remolque-01',
                'kilograms' => 11,
                'car_id' => 1,
            ],
            [
                'model' => 'Remolque-01',
                'kilograms' => 22,
                'car_id' => 2,
            ],
            [
                'model' => 'Remolque-01',
                'kilograms' => 33,
                'car_id' => 3,
            ],
        ];
        
        foreach ($remolques as $remolque) {
            Remolque::create($remolque);
        }
    }
}
