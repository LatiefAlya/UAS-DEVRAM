@extends('app')
@section('title', 'Daftar Buku')

@section('content')
    <div class="container">
        <h1>Daftar Buku</h1>
        <a href="{{ route('bukus.create') }}" class="btn btn-primary">Add Data Buku</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered mt-2">
            <tr>
                <th>Kode</th>
                <th>Judul</th>
                <th>ISBN</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun terbit</th>
                <th>Jumlas Stok</th>
                <th>Actions</th>
            </tr>
            @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $buku->kode }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->isbn }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>{{ $buku->jumlah_stok }}</td>
                    <td>
                        <a href="{{ route('bukus.show', $buku->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display:inline;">
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
