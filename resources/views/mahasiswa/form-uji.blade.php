<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Uji Mahasiswa</title>
</head>
<body>
    <form action="/mahasiswa-uji" method="POST">
        @csrf
        <input type="text" name="nim" placeholder="NIM"><br>
        <input type="text" name="nama" placeholder="Nama"><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>