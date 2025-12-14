@extends('layout')

@section('content')
<h2>Daftar Artikel</h2>

<a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Tambah Artikel</a>

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

<table class="table">
    <tr>
        <th>Judul</th>
        <th>Aksi</th>
    </tr>

    @foreach ($articles as $a)
    <tr>
        <td>{{ $a->title }}</td>
        <td>
            <a href="{{ route('articles.edit', $a->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('articles.destroy', $a->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $articles->links() }}
@endsection
