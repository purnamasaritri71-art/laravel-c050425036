<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Ahmad Fauzi';
        $pesan = "Halo, {$nama}! Ini ditulis di dalam Controller.";
        return $pesan;
    }
}
