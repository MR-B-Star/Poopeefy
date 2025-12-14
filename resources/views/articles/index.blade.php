@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">

    {{-- Header --}}
    <section class="bg-gradient-to-r from-primary to-primary-light rounded-2xl p-8 text-white shadow-lg mb-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <h1 class="text-3xl font-bold flex items-center gap-3">
                    <span>📰</span> Manajemen Artikel
                </h1>
                <p class="opacity-90 mt-2">
                    Kelola konten edukasi limbah organik Poopeefy
                </p>
            </div>

            <a href="{{ route('articles.create') }}"
               class="inline-flex items-center gap-2 px-6 py-3 bg-white text-primary-dark
                      rounded-xl font-semibold shadow hover:scale-105 transition">
                <span class="text-xl">➕</span> Tambah Artikel
            </a>
        </div>
    </section>

    {{-- Alert --}}
    @if(session('success'))
        <div class="mb-8 p-4 rounded-xl bg-green-100 text-green-800 border-l-4 border-green-500">
            ✅ {{ session('success') }}
        </div>
    @endif

    {{-- Content --}}
    <div class="space-y-6">

        @forelse ($articles as $a)
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                    {{-- Artikel Info --}}
                    <div class="flex gap-4">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary to-primary-light
                                    flex items-center justify-center text-2xl text-white">
                            🌱
                        </div>

                        <div>
                            <h2 class="text-xl font-bold text-primary-dark">
                                {{ $a->title }}
                            </h2>
                            <p class="text-sm text-gray-500 mt-1">
                                Dibuat {{ $a->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="flex gap-3 justify-end">
                        <a href="{{ route('articles.edit', $a->id) }}"
                           class="px-4 py-2 rounded-lg text-sm font-semibold
                                  bg-yellow-400 text-white hover:bg-yellow-500 transition
                                  flex items-center gap-2">
                            ✏️ Edit
                        </a>

                        <form action="{{ route('articles.destroy', $a->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin mau hapus artikel ini?')">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-4 py-2 rounded-lg text-sm font-semibold
                                       bg-red-500 text-white hover:bg-red-600 transition
                                       flex items-center gap-2">
                                🗑️ Hapus
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        @empty
            {{-- Empty State --}}
            <div class="bg-white rounded-2xl shadow p-12 text-center">
                <div class="text-6xl mb-4">📭</div>
                <h3 class="text-xl font-bold text-primary-dark mb-2">
                    Belum Ada Artikel
                </h3>
                <p class="text-gray-500 mb-6">
                    Yuk mulai berbagi edukasi tentang limbah organik 🌿
                </p>
                <a href="{{ route('articles.create') }}"
                   class="inline-flex items-center gap-2 px-6 py-3
                          bg-primary text-white rounded-xl font-semibold
                          hover:bg-primary-dark transition">
                    ➕ Tulis Artikel Pertama
                </a>
            </div>
        @endforelse

    </div>

    <a href="{{ route('dashboard-admin') }}"
   class="inline-flex items-center gap-2 text-sm text-primary font-semibold mb-6 hover:underline">
    ← Kembali ke Dashboard
</a>


    {{-- Pagination --}}
    <div class="mt-10">
        {{ $articles->links() }}
    </div>

</div>
@endsection
