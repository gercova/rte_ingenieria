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
        UnitMeasure::create(['description' => 'CAJA', 'aka' => 'CAJ']);
        UnitMeasure::create(['description' => 'UNIDAD', 'aka' => 'UNI']);
        UnitMeasure::create(['description' => 'KILOGRAMO', 'aka' => 'KG']);
        UnitMeasure::create(['description' => 'TONELADA', 'aka' => 'TON']);
        UnitMeasure::create(['description' => 'DOCENA', 'aka' => 'DOC']);
        UnitMeasure::create(['description' => 'LITRO', 'aka' => 'LT']);
        UnitMeasure::create(['description' => 'MILILITRO', 'aka' => 'ML']);
        UnitMeasure::create(['description' => 'PIEZA', 'aka' => 'PZ']);
    }
}
