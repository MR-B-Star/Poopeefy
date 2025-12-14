@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-bold text-primary-dark mb-8 flex items-center gap-2">
        📋 Data Pengajuan Limbah
    </h1>

    <div class="space-y-6">
        @forelse ($submissions as $s)
    <div class="bg-white rounded-2xl shadow p-6 mb-6">

        <h3 class="text-lg font-semibold">{{ $s->nama_usaha }}</h3>
        <p class="text-sm text-gray-600">{{ $s->nama }} • {{ $s->telepon }}</p>

        <div class="mt-3 text-sm text-gray-600">
            📍 {{ $s->kabupaten }}, {{ $s->provinsi }} <br>
            ♻️ {{ implode(', ', json_decode($s->jenis_limbah, true)) }}
            ⚖️ {{ $s->kapasitas }} kg
        </div>

        {{-- STATUS --}}
        @if ($s->status === 'pending')
            <form action="{{ route('submissions.send', $s->id) }}" method="POST" class="mt-4 flex gap-2 items-center">
                @csrf
                <select name="industry_id" class="border rounded-lg px-3 py-2 text-sm" required>
                    <option value="">Pilih Industri</option>
                    @foreach ($industries as $i)
                        <option value="{{ $i->id }}">{{ $i->industry_name }}</option>
                    @endforeach
                </select>

                <button class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm">
                    🚀 Kirim
                </button>
            </form>

        @elseif ($s->industry)
            <p class="mt-4 text-sm text-gray-500">
                ✅ Dikirim ke: <b>{{ $s->industry->industry_name }}</b>
            </p>

        @else
            <p class="mt-4 text-sm text-red-500">
                ⚠️ Status terkirim tapi industri kosong (data error)
            </p>
        @endif
    </div>
</div>

        @empty
            <div class="bg-white rounded-2xl shadow p-12 text-center text-gray-500">
                📭 Belum ada pengajuan masuk
            </div>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $submissions->links() }}
    </div>

    <form action="{{ route('submissions.send', $s->id) }}" method="POST"
      class="flex items-center gap-3">
    @csrf
</form>

@endsection
