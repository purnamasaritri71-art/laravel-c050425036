<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return 'Halaman daftar seluruh mahasiswa';
    }

    public function show($nim)
    {
        return "Halaman detail mahasiswa dengan NIM: {$nim}";
    }

    //praktikum 2 (Materi #4)
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $nim = $request->input('nim');

        return "Data yang diterima -> NIM: {$nim}, Nama: {$nama}";
    }

    public function apiIndex()
    {
        return response()->json([
            'status' => 'sukses',
            'pesan' => 'Ini contoh response JSON dari Controller',
        ]);
    }

    public function cariMahasiswa(Request $request)
    {
        $cari = $request->input('nama');
        return "Kata kunci pencarian nama mahasiswa: {$cari}";
    }

    public function rekapProdi()
    {
        $rekap = \DB::table('mahasiswas')
            ->select('prodi', \DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();

        return view('rekap_prodi', compact('rekap'));
    }

    public function indexMahasiswa()
    {
        // Menggunakan paginate(10) alih-alih get()
        $data = \DB::table('mahasiswas')->paginate(10);
    
        return view('mahasiswa_index', compact('data'));
    }
}