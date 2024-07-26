@extends('app')
@section('title', 'Tambah Data')

@section('content')
    <div class="container">
        <h1>Add Data Pengembalian</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pengembalians.store') }}" method="POST">
            @csrf
            @include('pengembalians.form', ['submitButtonText' => 'Add'])
        </form>
    </div>
@endsection
