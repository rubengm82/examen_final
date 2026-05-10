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
            ],
            [
                'model' => 'Remolque-02',
                'kilograms' => 22,
            ],
            [
                'model' => 'Remolque-03',
                'kilograms' => 33,
            ],
        ];
        
        foreach ($remolques as $remolque) {
            Remolque::create($remolque);
        }
    }
}
