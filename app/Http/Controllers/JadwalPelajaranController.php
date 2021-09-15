<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalPelajaranController extends Controller
{
    public function index()
    {
        return view('pengajuan.jadwalPelajaran.index');
    }

    public function create()
    {
        return view('pengajuan.jadwalPelajaran.create');
    }
}
