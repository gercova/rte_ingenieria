<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductModel::create(['name' => 'Genérico', 'description' => '--']);
        ProductModel::create(['name' => 'Edición especial', 'description' => '--']);
    }
}
