<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalonPesertaUpkAController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.calonPesertaUpkA.index');
    }

    public function create()
    {
        return view('admin.pengajuan.calonPesertaUpkA.create');
    }

    public function ajuanVerifikasi()
    {
        return view('admin.pengajuan.calonPesertaUpkA.ajuanVerifikasi');
    }

    public function catatanPenilaian()
    {
        return view('admin.pengajuan.calonPesertaUpkA.catatanPenilaian');
    }
}
