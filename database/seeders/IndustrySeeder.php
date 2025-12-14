class IndustrySeeder extends Seeder
{
    public function run()
    {
        \App\Models\Industry::factory()->count(5)->create();

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
