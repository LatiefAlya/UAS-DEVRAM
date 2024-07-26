@extends('app')
@section('title', 'Tambah Buku')

@section('content')
    <div class="container">
        <h1>Add Data Buku</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('bukus.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" class="form-control" value="{{ old('kode') }}">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul') }}">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="{{ old('pengarang') }}">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit') }}">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit') }}">
            </div>
            <div class="form-group">
                <label for="jumlah_stok">Jumlah Stok</label>
                <input type="text" name="jumlah_stok" class="form-control" value="{{ old('jumlah_stok') }}">
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>
@endsection
