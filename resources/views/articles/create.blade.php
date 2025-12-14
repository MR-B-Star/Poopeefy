@extends('layout')

@section('content')
<h2>Buat Artikel</h2>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <label>Judul</label>
    <input type="text" name="title" class="form-control">

    <label>Isi Konten</label>
    <textarea name="content" class="form-control"></textarea>

    <button class="btn btn-primary mt-3">Simpan</button>
</form>
@endsection
