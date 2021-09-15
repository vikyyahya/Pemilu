<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return view('pengajuan.tutor.index');
    }

    public function create()
    {
        return view('pengajuan.tutor.create');
    }
}
