<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalonPesertaBCController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.calonPesertaBC.index');
    }

    public function create()
    {
        return view('admin.pengajuan.calonPesertaBC.create');
    }
}
