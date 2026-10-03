<!DOCTYPE html>
<html>
<head>
    <title>Uji XSS Blade</title>
</head>
<body>
    <h2>Uji Perbandingan {{ }} dan {!! !!}</h2>

    <h3>1. Menggunakan sintaks {{ }} (Aman):</h3>
    <p>{{ $data }}</p> 
    {{-- Hasil di browser: Tag <script> akan tercetak sebagai teks biasa dan tidak jalan --}}

    <hr>

    <h3>2. Menggunakan sintaks {!! !!} (Raw / Rentan XSS):</h3>
    <p>{!! $data !!}</p> 
    {{-- Hasil di browser: Script akan tereksekusi, memunculkan pop-up alert "XSS Berhasil Dieksekusi!" --}}
</body>
</html>