@extends('app')
@section('title', 'Edit Data Member')

@section('content')
    <div class="container">
        <h1>Edit Data Member</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('members._form', ['submitButtonText' => 'Update'])
        </form>
    </div>
@endsection
