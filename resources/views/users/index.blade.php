@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Daftar User</h1>
        <div class="d-flex justify-content-between">
            <p>Daftar lengkap user yang tersedia di perpustakaan.</p>
            <a href="{{ route('user.add') }}" class="btn btn-primary">Tambah User</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger mt-2">
                {{ session('error') }}
            </div>
        @endif
        <table class="table table-striped table-hover table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($users->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data user tersedia.</td>
                    </tr>
                @else
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('user.delete', $user->id) }}"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')"
                                    class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection