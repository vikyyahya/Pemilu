<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.daftarPengajuan.index');
    }

    public function edit()
    {
        return view('admin.pengajuan.daftarPengajuan.edit');
    }
}
