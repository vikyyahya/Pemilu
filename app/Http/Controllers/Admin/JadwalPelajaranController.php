<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalPelajaranController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.jadwalPelajaran.index');
    }

    public function create()
    {
        return view('admin.pengajuan.jadwalPelajaran.create');
    }
}
