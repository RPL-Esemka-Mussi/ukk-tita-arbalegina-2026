@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Daftar Buku</h1>
        <div class="d-flex justify-content-between">
            <p>Daftar lengkap buku yang tersedia di perpustakaan.</p>
            <a href="{{ route('book.add') }}" class="btn btn-primary">Tambah Buku</a>
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
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($books->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data buku tersedia.</td>
                    </tr>
                @else
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td>{{ $book->tahun_terbit }}</td>
                            <td>{{ $book->stok }}</td>
                            <td>
                                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('book.delete', $book->id) }}"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')"
                                    class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection