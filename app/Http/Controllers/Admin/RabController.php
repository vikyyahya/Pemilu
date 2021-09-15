<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RabController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.rencanaAnggaranBiaya.index');
    }

    public function create()
    {
        return view('admin.pengajuan.rencanaAnggaranBiaya.create');
    }
}
