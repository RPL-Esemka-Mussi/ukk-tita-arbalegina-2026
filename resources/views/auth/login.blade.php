@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1>Login</h1>
                <p>Masukkan email dan password Anda untuk masuk ke sistem perpustakaan.</p>
                <form method="POST" action="{{ route('authenticate') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection