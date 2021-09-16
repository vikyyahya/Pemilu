<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalonPesertaAController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.calonPesertaA.index');
    }

    public function create()
    {
        return view('admin.pengajuan.calonPesertaA.create');
    }
}
