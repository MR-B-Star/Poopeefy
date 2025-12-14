@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">

    <div class="bg-white rounded-2xl shadow p-8">
        <h2 class="text-2xl font-bold text-primary-dark mb-6 flex items-center gap-2">
            ✏️ Edit Industri
        </h2>

        <form action="{{ route('industries.update', $industry->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Nama Industri
                </label>
                <input type="text" name="industry_name"
                       value="{{ $industry->industry_name }}"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Lokasi
                </label>
                <input type="text" name="location"
                       value="{{ $industry->location }}"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Kapasitas
                </label>
                <input type="text" name="capacity"
                       value="{{ $industry->capacity }}"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Kontak
                </label>
                <input type="text" name="contact"
                       value="{{ $industry->contact }}"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Metode Pengolahan
                </label>
                <input type="text" name="method"
                       value="{{ $industry->method }}"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary">
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <a href="{{ route('industries.index') }}"
                   class="px-5 py-3 rounded-xl border border-gray-300 hover:bg-gray-100 transition">
                    Batal
                </a>

                <button
                    class="px-6 py-3 rounded-xl bg-primary text-white font-semibold
                           hover:bg-primary-dark transition">
                    🔄 Update
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
