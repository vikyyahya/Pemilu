<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalonPesertaUpkBCController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.calonPesertaUpkBC.index');
    }

    public function create()
    {
        return view('admin.pengajuan.calonPesertaUpkBC.create');
    }

    public function ajuanVerifikasi()
    {
        return view('admin.pengajuan.calonPesertaUpkBC.ajuanVerifikasi');
    }

    public function catatanPenilaian()
    {
        return view('admin.pengajuan.calonPesertaUpkBC.catatanPenilaian');
    }
}
