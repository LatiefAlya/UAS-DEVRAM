@extends('app')
@section('title', 'Tambah Data Peminjam')

@section('content')
    <div class="container">
        <h1>Add Data Peminjam</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pinjams.store') }}" method="POST">
            @csrf
            @include('pinjams.form', ['submitButtonText' => 'Add'])
        </form>
    </div>
@endsection
