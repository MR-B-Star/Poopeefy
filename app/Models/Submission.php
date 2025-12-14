<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'nama','telepon','email','ktp',
        'alamat','kelurahan','kecamatan','kabupaten','provinsi','kodepos',
        'nama_usaha','lama_operasi','kapasitas',
        'jenis_limbah','penyimpanan','kendaraan','catatan',
        'status'
    ];

    protected $casts = [
        'jenis_limbah' => 'array',
    ];
}
