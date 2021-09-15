<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalonPesertaUpkBCController extends Controller
{
    public function index()
    {
        return view('pengajuan.calonPesertaUpkBC.index');
    }

    public function create()
    {
        return view('pengajuan.calonPesertaUpkBC.create');
    }

    public function ajuanVerifikasi()
    {
        return view('pengajuan.calonPesertaUpkBC.ajuanVerifikasi');
    }

    public function catatanPenilaian()
    {
        return view('pengajuan.calonPesertaUpkBC.catatanPenilaian');
    }
}
