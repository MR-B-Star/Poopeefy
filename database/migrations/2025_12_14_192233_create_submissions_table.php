<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->string('telepon');
            $table->string('email')->nullable();
            $table->string('ktp', 16);
            $table->text('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kodepos')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('lama_operasi');
            $table->integer('kapasitas');
            $table->json('jenis_limbah');
            $table->string('penyimpanan');
            $table->string('kendaraan');
            $table->text('catatan')->nullable();
            $table->string('status')->default('pending');
            $table->foreignId('industry_id')
                    ->nullable()
                    ->constrained()
                    ->nullOnDelete();
            $table->foreignId('industry_id')->nullable()->constrained();
            $table->enum('status', ['pending', 'terkirim'])->default('pending');


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
