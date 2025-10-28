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
        ProductColor::create(['code' => 'ffff', 'name' => 'Blanco']);
        ProductColor::create(['code' => '0000', 'name' => 'Negro']);
        ProductColor::create(['code' => 'ff00', 'name' => 'Rojo']);
        ProductColor::create(['code' => '00ff', 'name' => 'Azul']);
        ProductColor::create(['code' => 'ffff', 'name' => 'Amarillo']);
        ProductColor::create(['code' => '####', 'name' => 'Genérico']);
    }
}
