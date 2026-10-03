<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $index => $mhs)
            <tr>
                <td>{{ $index + 1 }}</td>
                {{-- Menggunakan operator ?? jika nim atau prodi bernilai null --}}
                <td>{{ $mhs->nim ?? 'NIM Belum Diisi' }}</td>
                <td>{{ $mhs->nama ?? 'Tanpa Nama' }}</td>
                <td>{{ $mhs->prodi ?? 'Prodi Belum Ditentukan' }}</td>
                <td>{{ $mhs->semester ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>