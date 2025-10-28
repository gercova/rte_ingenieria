<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create(['name' => 'Accesorio', 'description' => '--']);
        ProductCategory::create(['name' => 'Equipo', 'description' => '--']);
        ProductCategory::create(['name' => 'Herramienta', 'description' => '--']);
        ProductCategory::create(['name' => 'Telecomunicación', 'description' => '--']);
    }
}
