<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelengkapanController extends Controller
{
    public function index()
    {
        return view('admin.kelengkapan.index');
    }

    public function create()
    {
        return view('admin.pengajuan.tutor.create');
    }
}
