<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductBrand::create(['name' => 'Genérico', 'description' => '--']);
        ProductBrand::create(['name' => 'TP Link', 'description' => '--']);
        ProductBrand::create(['name' => 'UBT', 'description' => '--']);
    }
}
