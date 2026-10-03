@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')
    <h1>Daftar Mata Kuliah</h1>

    <p>
        <a href="{{ route('mahasiswa.index') }}">Ke Daftar Mahasiswa</a> |
        <a href="{{ route('matakuliah.index') }}">Ke Daftar Mata Kuliah</a>
    </p>
    <hr>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliah as $mk)
                <tr style="background-color: {{ $loop->even ? '#f9f9f9' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->kode_mk ?? '-' }}</td>
                    <td>{{ $mk->nama_mk ?? '-' }}</td>
                    <td>{{ $mk->sks ?? '-' }}</td>
                    <td>{{ $mk->semester ?? '-' }}</td>
                    <td>
                        @if ($mk->sks > 3)
                            <strong style="color: red;">SKS Besar</strong>
                        @else
                            <span>Standard</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('matakuliah.show', $mk->id) }}">Lihat Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Maaf, data mata kuliah belum tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection