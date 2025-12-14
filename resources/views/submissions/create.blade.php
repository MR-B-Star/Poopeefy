@extends('layout')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">

    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-primary-dark flex items-center gap-2">
            📝 Form Pengajuan Limbah
        </h1>
        <p class="text-gray-500 mt-1">
            Isi data dengan benar agar limbah dapat didistribusikan ke industri yang sesuai
        </p>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 rounded-xl bg-green-100 text-green-800 border-l-4 border-green-500">
            ✅ {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('submissions.store') }}" method="POST" class="space-y-10">
        @csrf

        {{-- DATA PRIBADI --}}
        <section class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-xl font-bold text-primary-dark mb-6">👤 Data Pribadi</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <input name="nama" placeholder="Nama Lengkap" class="input" required>
                <input name="telepon" placeholder="No. Telepon" class="input" required>
                <input name="email" placeholder="Email" class="input" required>
                <input name="ktp" placeholder="Nomor KTP (16 digit)" class="input" required>
            </div>

            <div class="mt-6">
                <textarea name="alamat" placeholder="Alamat Lengkap" rows="3" class="input" required></textarea>
            </div>
        </section>

        {{-- LOKASI --}}
        <section class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-xl font-bold text-primary-dark mb-6">📍 Lokasi</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <input name="kelurahan" placeholder="Kelurahan" class="input" required>
                <input name="kecamatan" placeholder="Kecamatan" class="input" required>
                <input name="kabupaten" placeholder="Kabupaten / Kota" class="input" required>
                <input name="provinsi" placeholder="Provinsi" class="input" required>
                <input name="kodepos" placeholder="Kode Pos" class="input" required>
            </div>
        </section>

        {{-- DATA USAHA --}}
        <section class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-xl font-bold text-primary-dark mb-6">🏪 Data Usaha</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <input name="nama_usaha" placeholder="Nama Usaha" class="input" required>
                <input name="lama_operasi" placeholder="Lama Operasi (tahun)" class="input" required>
                <input name="kapasitas" type="number" placeholder="Kapasitas Limbah (kg)" class="input" required>
            </div>
        </section>

        {{-- LIMBAH --}}
        <section class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-xl font-bold text-primary-dark mb-6">♻️ Informasi Limbah</h2>

            <div class="grid md:grid-cols-2 gap-4 mb-6">
                @foreach (['Sisa Makanan','Sayur','Buah','Minyak Jelantah','Kotoran Hewan'] as $item)
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="jenis_limbah[]" value="{{ $item }}">
                        {{ $item }}
                    </label>
                @endforeach
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <input name="penyimpanan" placeholder="Cara Penyimpanan Limbah" class="input" required>
                <input name="kendaraan" placeholder="Kendaraan Pengangkut" class="input" required>
            </div>

            <div class="mt-6">
                <textarea name="catatan" rows="3" placeholder="Catatan Tambahan" class="input" required></textarea>
            </div>

            <input type="hidden" name="status" value="pending">
        </section>

        <div class="flex justify-end">
            <button
                class="px-8 py-4 bg-gradient-to-br from-primary to-primary-light
                       text-white font-semibold rounded-xl shadow hover:opacity-90 transition">
                🚀 Kirim Pengajuan
            </button>
        </div>
    </form>
</div>

<style>
    .input {
        @apply w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary p-3;
    }
</style>
@endsection
