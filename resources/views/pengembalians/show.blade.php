@extends('app')
@section('title', 'Details Data Pengembalian')

@section('content')
    <div class="container">
        <h1>Detail Data Pengembalian Buku</h1>
        <div class="card">
            <div class="card-header">
                {{ $pengembalian->nama }}
            </div>
            <div class="card-body">
                <p><strong>NIK:</strong> {{ $pengembalian->nik }}</p>
                <p><strong>Judul Buku:</strong> {{ $pengembalian->judul_buku }}</p>
                <p><strong>ISBN:</strong> {{ $pengembalian->isbn }}</p>
                <p><strong>Tanggal Pinjam:</strong> {{ $pengembalian->tanggal_pinjam }}</p>
                <p><strong>Tanggal Pengembalian:</strong> {{ $pengembalian->tanggal_pengembalian }}</p>
                <p><strong>Kondisi Buku:</strong> {{ $pengembalian->kondisi_buku }}</p>
                <p><strong>Denda:</strong> {{ $pengembalian->denda }}</p>
            </div>
        </div>
        <a href="{{ route('pengembalians.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
