<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalonPesertaUpkAController extends Controller
{
    public function index()
    {
        return view('pengajuan.calonPesertaUpkA.index');
    }

    public function create()
    {
        return view('pengajuan.calonPesertaUpkA.create');
    }

    public function ajuanVerifikasi()
    {
        return view('pengajuan.calonPesertaUpkA.ajuanVerifikasi');
    }

    public function catatanPenilaian()
    {
        return view('pengajuan.calonPesertaUpkA.catatanPenilaian');
    }
}
