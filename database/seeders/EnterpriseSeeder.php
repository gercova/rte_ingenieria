<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enterprise::create([
            'ruc'           => '20000000000',
            'trade_name'    => 'RTE Ingeniería Servicios Generales',
            'business_name' => 'RTE',
            'proverb'       => 'Innovando la Conectividad',
            'email'         => 'rte-ingenieria@gmail.com',
            'address'       => 'Jr. Los Pinos - Pativilca - Lima',
            'telephone'     => '999-999-999',
            'description'   => 'Telecomunicaciones, Radio-enlace, fibra óptica y Servicos generales',
            'legal_representative' => 'Raúl Huaman Rivera',
            'logo'          => 'rte_logo_2025', 
            'icon'          => 'rte_icono_2025',
            'logo_min'      => 'rte_miniatura_2025',
            'banner'        => 'rte_banner_2025',
            'creation_date' => '2010-01-01'
        ]);
    }
}
