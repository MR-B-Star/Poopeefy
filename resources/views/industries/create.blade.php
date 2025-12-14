@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">

    <div class="bg-white rounded-2xl shadow p-8">
        <h2 class="text-2xl font-bold text-primary-dark mb-6 flex items-center gap-2">
            🏭 Tambah Industri
        </h2>

        <form action="{{ route('industries.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Nama Industri
                </label>
                <input type="text" name="industry_name"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary"
                       placeholder="Nama pabrik / industri pengelola">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Lokasi
                </label>
                <input type="text" name="location"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary"
                       placeholder="Alamat atau wilayah industri">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Kapasitas (opsional)
                </label>
                <input type="text" name="capacity"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary"
                       placeholder="Contoh: 10 ton / hari">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Kontak (opsional)
                </label>
                <input type="text" name="contact"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary"
                       placeholder="No. telepon / email industri">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Metode Pengolahan (opsional)
                </label>
                <input type="text" name="method"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary"
                       placeholder="Contoh: Kompos, Biogas, dll">
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <a href="{{ route('industries.index') }}"
                   class="px-5 py-3 rounded-xl border border-gray-300 hover:bg-gray-100 transition">
                    Batal
                </a>

                <button
                    class="px-6 py-3 rounded-xl bg-primary text-white font-semibold
                           hover:bg-primary-dark transition">
                    💾 Simpan
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
