<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h1>Tambah Data Mata Kuliah</h1>
    
    <form action="/matakuliah" method="POST">
        @csrf
        <div class="form-group">
            <label>Kode MK:</label>
            <input type="text" name="kode_mk" required>
        </div>
        <div class="form-group">
            <label>Nama Mata Kuliah:</label>
            <input type="text" name="nama_mk" required>
        </div>
        <div class="form-group">
            <label>SKS:</label>
            <input type="number" name="sks" required>
        </div>
        <div class="form-group">
            <label>Semester:</label>
            <input type="number" name="semester" required>
        </div>
        <div class="form-group">
            <label>Dosen Pengampu (ID Dosen):</label>
            <input type="number" name="dosen_id">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>