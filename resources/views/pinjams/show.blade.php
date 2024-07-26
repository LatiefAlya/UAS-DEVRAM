@extends('app')
@section('title', 'Details Data Peminjam')

@section('content')
    <div class="container">
        <h1>Detail Data Peminjam</h1>
        <div class="card">
            <div class="card-header">
                {{ $pinjam->nama }}
            </div>
            <div class="card-body">
                <p><strong>NIK:</strong> {{ $pinjam->nik }}</p>
                <p><strong>Nama peminjam:</strong> {{ $pinjam->nama_peminjam }}</p>
                <p><strong>Email:</strong> {{ $pinjam->email }}</p>
                <p><strong>Telepon:</strong> {{ $pinjam->telepon }}</p>
                <p><strong>Judul Buku:</strong> {{ $pinjam->judul_buku }}</p>
                <p><strong>ISBN:</strong> {{ $pinjam->isbn }}</p>
                <p><strong>Tgl Peminjaman:</strong> {{ $pinjam->tanggal_peminjaman }}</p>
                <p><strong>Tgl Pengembalian:</strong> {{ $pinjam->tanggal_pengembalian }}</p>
            </div>
        </div>
        <a href="{{ route('pinjams.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
