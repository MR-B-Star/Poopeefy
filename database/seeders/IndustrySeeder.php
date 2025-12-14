<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustrySeeder extends Seeder
{
    public function run(): void
    {
        Industry::create([
            'industry_name' => 'PT EcoGreen Fertilizer',
            'location' => 'Jember, Jawa Timur',
            'capacity' => '100 ton/bulan',
            'contact' => '081234567890',
            'method' => 'Komposting & Fermentasi'
        ]);

        Industry::create([
            'industry_name' => 'BioGas Nusantara',
            'location' => 'Banyuwangi, Jawa Timur',
            'capacity' => '200 ton/bulan',
            'contact' => '082134567991',
            'method' => 'Konversi Biogas Terintegrasi'
        ]);
    }
}
