<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('judul', 'Sistem Informasi Akademik')</title>
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('konten')
    </main>
    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web</p>
    </footer>
</body>
</html>