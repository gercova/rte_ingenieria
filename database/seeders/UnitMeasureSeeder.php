<?php

namespace Database\Seeders;

use App\Models\UnitMeasure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnitMeasure::create(['name' => 'CAJA', 'description' => '--', 'aka' => 'CAJ']);
        UnitMeasure::create(['name' => 'UNIDAD','description' => '--', 'aka' => 'UNI']);
        UnitMeasure::create(['name' => 'KILOGRAMO', 'description' => '--', 'aka' => 'KG']);
        UnitMeasure::create(['name' => 'TONELADA', 'description' => '--', 'aka' => 'TON']);
        UnitMeasure::create(['name' => 'DOCENA', 'description' => '--', 'aka' => 'DOC']);
        UnitMeasure::create(['name' => 'LITRO', 'description' => '--', 'aka' => 'LT']);
        UnitMeasure::create(['name' => 'MILILITRO', 'description' => '--', 'aka' => 'ML']);
        UnitMeasure::create(['name' => 'PIEZA', 'description' => '--', 'aka' => 'PZ']);
    }
}
