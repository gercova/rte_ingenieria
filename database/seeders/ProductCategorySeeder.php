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
        ProductCategory::create(['description' => 'Accesorio']);
        ProductCategory::create(['description' => 'Equipo']);
        ProductCategory::create(['description' => 'Herramienta']);
        ProductCategory::create(['description' => 'Telecomunicación']);
    }
}
