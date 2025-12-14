@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">

    <div class="bg-white rounded-2xl shadow p-8">
        <h2 class="text-2xl font-bold text-primary-dark mb-6 flex items-center gap-2">
            ✏️ Edit Artikel
        </h2>

        <form action="{{ route('articles.update', $article->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Judul Artikel
                </label>
                <input type="text" name="title"
                       value="{{ $article->title }}"
                       class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Konten
                </label>
                <textarea name="content" rows="6"
                          class="w-full rounded-xl border-gray-300 focus:border-primary focus:ring-primary">{{ $article->content }}</textarea>
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('articles.index') }}"
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
