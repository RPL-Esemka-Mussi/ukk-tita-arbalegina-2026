<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    @if (!Request::routeIs('login'))
        @if(auth()->user()->role == 'admin')
            <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">Perpustakaan</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">Dashboard</a>
                            <a class="nav-link {{ Request::routeIs('user.*') ? 'active' : '' }}"
                                href="{{ route('user.index') }}">User</a>
                            <a class="nav-link {{ Request::routeIs('book.*') ? 'active' : '' }}"
                                href="{{ route('book.index') }}">Buku</a>
                            <a class="nav-link {{ Request::routeIs('loan.*') ? 'active' : '' }}"
                                href="{{ route('loan.index') }}">Peminjaman</a>
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        @else
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">Perpustakaan</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">Dashboard</a>
                            <a class="nav-link {{ Request::routeIs('peminjaman.*') ? 'active' : '' }}"
                                href="{{ route('peminjaman.index') }}">Daftar Buku</a>
                                <a class="nav-link {{ Request::routeIs('daftar_peminjaman.*') ? 'active' : '' }}"
                                href="{{ route('daftar_peminjaman.index') }}">Histori Peminjaman Buku</a>
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        @endif
    @endif

    @yield('content')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>