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
            'email' => 'ecogreen@gmail.com',
            'password' => 'ecogreen123',
            'location' => 'Jember, Jawa Timur',
            'capacity' => '100 ton/bulan',
            'contact' => '081234567890',
            'method' => 'Komposting & Fermentasi'
        ]);

        Industry::create([
            'industry_name' => 'BioGas Nusantara',
            'email' => 'biogas@gmail.com',
            'password' => 'biogas123',
            'location' => 'Banyuwangi, Jawa Timur',
            'capacity' => '200 ton/bulan',
            'contact' => '082134567991',
            'method' => 'Konversi Biogas Terintegrasi'
        ]);
    }
}
