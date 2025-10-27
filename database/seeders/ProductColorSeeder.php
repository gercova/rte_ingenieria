<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductColor::create(['code' => 'ffff', 'description' => 'Blanco']);
        ProductColor::create(['code' => '0000', 'description' => 'Negro']);
        ProductColor::create(['code' => 'ff00', 'description' => 'Rojo']);
        ProductColor::create(['code' => '00ff', 'description' => 'Azul']);
        ProductColor::create(['code' => 'ffff', 'description' => 'Amarillo']);
        ProductColor::create(['code' => '####', 'description' => 'Genérico']);
    }
}
