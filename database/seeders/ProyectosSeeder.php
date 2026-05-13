<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use Illuminate\Database\Seeder;

class ProyectosSeeder extends Seeder
{
    public function run(): void
    {
        $proyectos = [
            [
                'nombre' => 'Proyecto 1',
                'descripcion' => 'Es muy guapo este proyecto 1',
                'fecha_inicio' => now()->subDays(rand(6, 30)),
                'fecha_fin' => now()->subDays(rand(0, 5)),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Proyecto 2',
                'descripcion' => 'Es muy guapo este proyecto 2',
                'fecha_inicio' => now()->subDays(rand(6, 30)),
                'fecha_fin' => now()->subDays(rand(0, 5)),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Proyecto 3',
                'descripcion' => 'Es muy guapo este proyecto 3',
                'fecha_inicio' => now()->subDays(rand(6, 30)),
                'fecha_fin' => now()->subDays(rand(0, 5)),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Proyecto 4',
                'descripcion' => 'Es muy guapo este proyecto 4',
                'fecha_inicio' => now()->subDays(rand(6, 30)),
                'fecha_fin' => now()->subDays(rand(0, 5)),
                'user_id' => 1,
            ],
        ];

        foreach ($proyectos as $proyecto) {
            Proyecto::create($proyecto);
        }
    }
}