@extends('layouts.app')

@section('judul', 'Detail Mata Kuliah - ' . $matakuliah->nama_mk)

@section('konten')
    <h1>Detail Mata Kuliah</h1>
    
    <p><strong>Kode MK:</strong> {{ $matakuliah->kode_mk }}</p>
    <p><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_mk }}</p>
    <p><strong>SKS:</strong> {{ $matakuliah->sks }}</p>
    <p><strong>Semester:</strong> {{ $matakuliah->semester }}</p>

    <br>
    <a href="{{ route('matakuliah.index') }}">&laquo; Kembali ke Daftar Mata Kuliah</a>
@endsection