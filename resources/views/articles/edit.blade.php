@extends('layout')

@section('content')
<h2>Edit Artikel</h2>

<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf @method('PUT')

    <label>Judul</label>
    <input type="text" name="title" class="form-control" value="{{ $article->title }}">

    <label>Konten</label>
    <textarea name="content" class="form-control">{{ $article->content }}</textarea>

    <button class="btn btn-primary mt-3">Update</button>
</form>
@endsection
