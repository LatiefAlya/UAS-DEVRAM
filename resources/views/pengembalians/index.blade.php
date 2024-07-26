@extends('app')
@section('title', 'Data Pengembalian')

@section('content')
    <div class="container">
        <h1>Data Pengembalian Buku</h1>
        <a href="{{ route('pengembalians.create') }}" class="btn btn-primary">Add Data</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered mt-2">
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>ISBN</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Pengembalian</th>
                <th>Kondisi Buku</th>
                <th>Denda</th>
                <th>Actions</th>
            </tr>
            @foreach ($pengembalians as $pengembalian)
                <tr>
                    <td>{{ $pengembalian->nik }}</td>
                    <td>{{ $pengembalian->nama }}</td>
                    <td>{{ $pengembalian->judul_buku }}</td>
                    <td>{{ $pengembalian->isbn }}</td>
                    <td>{{ $pengembalian->tanggal_pinjam }}</td>
                    <td>{{ $pengembalian->tanggal_pengembalian }}</td>
                    <td>{{ $pengembalian->kondisi_buku }}</td>
                    <td>{{ $pengembalian->denda }}</td>
                    <td>
                        <a href="{{ route('pengembalians.show', $pengembalian->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('pengembalians.edit', $pengembalian->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pengembalians.destroy', $pengembalian->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
