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
                'descripcion' => 'Descripcion Proyecto 1',
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