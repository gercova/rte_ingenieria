<?php

namespace Database\Seeders;

use App\Models\ProductManufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductManufacturer::create(['name' => 'TP Link', 'description' => '--', 'detail' => '--']);
        ProductManufacturer::create(['name' => 'Cisco', 'description' => '--', 'detail' => '--']);
        ProductManufacturer::create(['name' => 'Cisco Meraki', 'description' => '--', 'detail' => '--']);
    }
}
