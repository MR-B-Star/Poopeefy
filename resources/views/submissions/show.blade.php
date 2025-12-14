<h2 class="text-xl font-bold mb-4">
    {{ $submission->nama_usaha }}
</h2>

<p class="text-sm text-gray-600 mb-6">
    {{ $submission->alamat }}, {{ $submission->kabupaten }}
</p>

<form method="POST"
      action="{{ route('submissions.send', $submission->id) }}"
      class="flex gap-3 items-center">
    @csrf

    <select name="industry_id" required
        class="rounded-lg border-gray-300">
        <option value="">Pilih Industri Tujuan</option>
        @foreach ($industries as $i)
            <option value="{{ $i->id }}">
                {{ $i->industry_name }}
            </option>
        @endforeach
    </select>

    <button class="px-4 py-2 bg-primary text-white rounded-lg">
        Kirim Submission
    </button>
</form>
