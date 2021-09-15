<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return view('admin.pengajuan.tutor.index');
    }

    public function create()
    {
        return view('admin.pengajuan.tutor.create');
    }
}
