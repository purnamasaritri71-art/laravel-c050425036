<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }
    
    public function show(Matakuliah $matakuliah)
    {
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->only(['kode_mk', 'nama_mk', 'sks']));
        return redirect()->route('matakuliah.index')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $matakuliah->update($request->only(['kode_mk', 'nama_mk', 'sks']));
        return redirect()->route('matakuliah.index')->with('pesan', 'Data berhasil diperbarui');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with('pesan', 'Data berhasil dihapus');
    }

    public function ujiQuery()
    {
        \Illuminate\Support\Facades\DB::enableQueryLog();
        
        $matakuliahs = Matakuliah::limit(10)->get();
        foreach ($matakuliahs as $mk) {
            $mk->nilai;
        }
        
        $queryTanpaWith = \Illuminate\Support\Facades\DB::getQueryLog();
        \Illuminate\Support\Facades\DB::flushQueryLog();

        $matakuliahsWith = Matakuliah::with('nilai')->limit(10)->get();
        foreach ($matakuliahsWith as $mk) {
            $mk->nilai;
        }
        
        $queryDenganWith = \Illuminate\Support\Facades\DB::getQueryLog();

        dd([
            'Jumlah Query Tanpa with()' => count($queryTanpaWith),
            'Detail Tanpa with()' => $queryTanpaWith,
            'Jumlah Query Dengan with()' => count($queryDenganWith),
            'Detail Dengan with()' => $queryDenganWith
        ]);
    }
}
