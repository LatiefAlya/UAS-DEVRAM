@extends('app')
@section('title', 'Details Buku')

@section('content')
    <div class="container">
        <h1>Buku Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $buku->nama }}
            </div>
            <div class="card-body">
                <p><strong>Kode:</strong> {{ $buku->kode }}</p>
                <p><strong>Judul:</strong> {{ $buku->judul }}</p>
                <p><strong>ISBN:</strong> {{ $buku->isbn }}</p>
                <p><strong>Pengarang:</strong> {{ $buku->pengarang }}</p>
                <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
                <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
                <p><strong>Jumlah Stok:</strong> {{ $buku->jumlah_stok }}</p>
            </div>
        </div>
        <a href="{{ route('bukus.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
