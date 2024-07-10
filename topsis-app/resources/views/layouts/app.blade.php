<!DOCTYPE html>
<html>
<head>
    <title>Decision Support System - TOPSIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">TOPSIS DSS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('karyawan.index') }}">Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kriteria.index') }}">Kriteria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sub-bobot.index') }}">Sub-Bobot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penilaian.index') }}">Penilaian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('laporan.index') }}">Laporan</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
