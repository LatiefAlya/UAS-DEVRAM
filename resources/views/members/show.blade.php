@extends('app')
@section('title', 'Details Anggota')

@section('content')
    <div class="container">
        <h1>Member Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $member->nama }}
            </div>
            <div class="card-body">
                <p><strong>NIK:</strong> {{ $member->nik }}</p>
                <p><strong>Alamat:</strong> {{ $member->alamat }}</p>
                <p><strong>Email:</strong> {{ $member->email }}</p>
                <p><strong>Telepon:</strong> {{ $member->telepon }}</p>
            </div>
        </div>
        <a href="{{ route('members.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
