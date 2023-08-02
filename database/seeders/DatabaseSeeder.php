<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\Position;
use App\Models\SubArea;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            EventSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $area1 = Area::create(['name' => 'Dpto. de apoyo al Diagnóstico']);

        SubArea::create(['name' => 'Programas Presupuestales', 'area_id' => $area1->id]);
        SubArea::create(['name' => 'Cargos de Confianza', 'area_id' => $area1->id]);
        SubArea::create(['name' => 'Unid. Relaciones Públicas e Imagen Institucional', 'area_id' => $area1->id]);

        $area2 = Area::create(['name' => 'Unidad de Gestión y Desarrollo de Personal']);
        $area3 = Area::create(['name' => 'Unidad de Economía']);

        Position::create(['name'=>'Jefe de Operaciones'],['name'=>'Jefe de Imagen']);
    }
}
