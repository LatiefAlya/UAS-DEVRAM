@extends('app')
@section('title', 'Edit Data Pengembalian')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pengembalians.update', $pengembalian->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('pengembalians.form', ['submitButtonText' => 'Update'])
        </form>
    </div>
@endsection
