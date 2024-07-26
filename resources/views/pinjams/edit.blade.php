@extends('app')
@section('title', 'Edit Data Peminjam')

@section('content')
    <div class="container">
        <h1>Edit Data Peminjam</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pinjams.update', $pinjam->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('pinjams.form', ['submitButtonText' => 'Update'])
        </form>
    </div>
@endsection
