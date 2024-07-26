@extends('app')
@section('title', 'Data Anggota')

@section('content')
    <div class="container">
        <h1>Data Member</h1>
        <a href="{{ route('members.create') }}" class="btn btn-primary">Add Member</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered mt-2">
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Actions</th>
            </tr>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->nik }}</td>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->alamat }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->telepon }}</td>
                    <td>
                        <a href="{{ route('members.show', $member->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
