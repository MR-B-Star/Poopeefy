@extends('layout')

@section('content')
<h2>Data Submission Pengepul</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Kapasitas</th>
        <th>Status</th>
    </tr>

    @foreach ($submissions as $s)
    <tr>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->telepon }}</td>
        <td>{{ $s->kapasitas }} kg</td>
        <td>{{ $s->status }}</td>
    </tr>
    @endforeach
</table>

{{ $submissions->links() }}
@endsection
