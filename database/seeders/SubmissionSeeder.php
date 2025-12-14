<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Submission;

class SubmissionSeeder extends Seeder
{
    public function run(): void
    {
        Submission::create([
            'nama' => 'Budi Santoso',
            'telepon' => '081234567890',
            'email' => 'budi@mail.com',
            'ktp' => '3501234567890001',
            'alamat' => 'Jl. Mawar No. 10',
            'kelurahan' => 'Sumbersari',
            'kecamatan' => 'Sumbersari',
            'kabupaten' => 'Jember',
            'provinsi' => 'Jawa Timur',
            'kodepos' => '68121',
            'nama_usaha' => 'UD Maju Jaya',
            'lama_operasi' => '3 tahun',
            'kapasitas' => 50,
            'jenis_limbah' => json_encode(['organik', 'plastik']),
            'penyimpanan' => 'Gudang tertutup',
            'kendaraan' => 'Pick-up',
            'catatan' => 'Siap diverifikasi',
            'status' => 'pending'
        ]);

        Submission::create([
            'nama' => 'Siti Aminah',
            'telepon' => '082345678901',
            'email' => null,
            'ktp' => '3501234567890002',
            'alamat' => 'Jl. Melati No. 5',
            'kelurahan' => 'Patrang',
            'kecamatan' => 'Patrang',
            'kabupaten' => 'Jember',
            'provinsi' => 'Jawa Timur',
            'kodepos' => null,
            'nama_usaha' => null,
            'lama_operasi' => '1 tahun',
            'kapasitas' => 20,
            'jenis_limbah' => json_encode(['organik']),
            'penyimpanan' => 'Karung',
            'kendaraan' => 'Motor',
            'catatan' => null,
            'status' => 'pending'
        ]);
    }
}
