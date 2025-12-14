@extends('layout')

@section('content')
<h2>Daftar Industri</h2>

<a href="{{ route('industries.create') }}" class="btn btn-primary mb-3">Tambah Industri</a>

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

<table class="table">
    <tr>
        <th>Nama</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>

    @foreach ($industries as $i)
    <tr>
        <td>{{ $i->industry_name }}</td>
        <td>{{ $i->location }}</td>
        <td>
            <a href="{{ route('industries.edit', $i->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('industries.destroy', $i->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $industries->links() }}
@endsection
