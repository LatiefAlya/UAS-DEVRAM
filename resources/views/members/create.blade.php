@extends('app')
@section('title', 'Tambah Member')

@section('content')
    <div class="container">
        <h1>Add Member</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('members.store') }}" method="POST">
            @csrf
            @include('members._form', ['submitButtonText' => 'Add'])
        </form>
    </div>
@endsection
