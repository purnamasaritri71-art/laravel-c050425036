<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

/*
//praktikum 1//
Route::get('/halo', function () {
    return 'Halo, ini adalah route pertama saya!';
});

Route::get('/profil', function () {
    return 'Halaman Profil Saya';
});
Route::get('/kontak', function () {
    return 'Halaman Kontak Kami';
 });

Route::get('/tentang', function () {
    return 'Halaman Tentang Aplikasi';
 });

Route::get('/pesan', function () {
    return 'Ini pesan dari Closure';
 });
*/

//praktikum 2
Route::prefix('akademik')->name('akademik.')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
/*
    //praktikum 3
    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])->name('matakuliah.show');
*/
    Route::resource('matakuliah', MatakuliahController::class)
        ->only(['index', 'show', 'create', 'store']);
});

//praktikum 4
Route::get('/profil', function () {
    return view('profil')
        ->with('nama', 'Tri Purnama Sari')
        ->with('nim', 'C050425036')
        ->with('prodi', 'Sistem Informasi Kota Cerdas');
});

Route::get('/statistik', function () {
    return view('akademik.statistik');
});

Route::get('/uji-xss', function () {
    // Data tiruan yang mengandung script XSS
    $dataXss = "<script>alert('XSS Berhasil Dieksekusi!')</script> Halo, Nama Saya Budi";
    
    return view('akademik.uji_xss', ['data' => $dataXss]);
});

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])->name('matakuliah.show');

//MASUK CONTROLLER MATERI #4

//Praktikum 1
Route::get('/sapa-closure', function() {
    $nama = 'Ahmad Fauzi';
    $pesan = "Halo, {$nama}! Ini ditulis langsung di route.";
    return $pesan;
});

Route::get('/sapa-controller', [SapaController::class, 'index']);
Route::get('/latihan', [LatihanController::class, 'index']);

Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});
Route::post('/mahasiswa-uji', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa-json', [MahasiswaController::class, 'apiIndex']);

Route::get('/form-cari', function () {
    return view('mahasiswa.form-cari');
});
Route::get('/mahasiswa-cari', [MahasiswaController::class, 'cariMahasiswa']);

Route::get('/rekap-prodi', [MahasiswaController::class, 'rekapProdi']);

Route::get('/mahasiswa', [MahasiswaController::class, 'indexMahasiswa']);

Route::get('/uji-query', [MatakuliahController::class, 'ujiQuery']);
