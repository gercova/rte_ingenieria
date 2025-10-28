<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductBrand::create(['name' => 'Marca 1',]);
        ProductBrand::create(['name' => 'Marca 2',]);
        ProductBrand::create(['name' => 'Marca 3',]);
        ProductBrand::create(['name' => 'Marca 4',]);
        ProductBrand::create(['name' => 'Marca 5',]);
        ProductBrand::create(['name' => 'Marca 6',]);
        ProductBrand::create(['name' => 'Marca 7',]);
        ProductBrand::create(['name' => 'Marca 8',]);
        ProductBrand::create(['name' => 'Marca 9',]);
        ProductBrand::create(['name' => 'Marca 10',]);
        ProductBrand::create(['name' => 'Marca 11',]);
    }
}
