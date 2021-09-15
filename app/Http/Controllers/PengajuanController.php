<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('pengajuan.daftarPengajuan.index');
    }

    public function edit()
    {
        return view('pengajuan.daftarPengajuan.edit');
    }
}
