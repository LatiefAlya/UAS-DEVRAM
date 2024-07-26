@extends('app')
@section('title', 'Data Peminjaman')

@section('content')
    <div class="container">
        <h1>Data Peminjaman</h1>
        <a href="{{ route('pinjams.create') }}" class="btn btn-primary">Add Data</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered mt-2">
            <tr>
                <th>Nik</th>
                <th>Nama Peminjam</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Judul Buku</th>
                <th>ISBN</th>
                <th>Tgl Peminjaman</th>
                <th>Tgl Pengembalian</th>
                <th>Actions</th>
            </tr>
            @foreach ($pinjams as $pinjam)
                <tr>
                    <td>{{ $pinjam->nik }}</td>
                    <td>{{ $pinjam->nama_peminjam }}</td>
                    <td>{{ $pinjam->email }}</td>
                    <td>{{ $pinjam->telepon }}</td>
                    <td>{{ $pinjam->judul_buku }}</td>
                    <td>{{ $pinjam->isbn }}</td>
                    <td>{{ $pinjam->tanggal_peminjaman }}</td>
                    <td>{{ $pinjam->tanggal_pengembalian }}</td>
                    <td>
                        <a href="{{ route('pinjams.show', $pinjam->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('pinjams.edit', $pinjam->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pinjams.destroy', $pinjam->id) }}" method="POST"
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
