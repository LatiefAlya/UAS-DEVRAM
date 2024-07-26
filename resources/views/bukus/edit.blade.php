@extends('app')
@section('title', 'Ubah Data Buku')

@section('content')
    <div class="container">
        <h1>Edit Data Buku</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('bukus.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" class="form-control" value="{{ $buku->kode }}">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{ $buku->isbn }}">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="{{ $buku->pengarang }}">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}">
            </div>
            <div class="form-group">
                <label for="jumlah_stok">Jumlah Stok</label>
                <input type="text" name="jumlah_stok" class="form-control" value="{{ $buku->jumlah_stok }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
