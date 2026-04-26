@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Dashboard Perpustakaan</h1>
    <h2>👋 Halo {{ auth()->user()->name }}, selamat datang di aplikasi perpustakaan!</h2>
</div>
@endsection