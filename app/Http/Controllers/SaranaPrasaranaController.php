<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaPrasaranaController extends Controller
{
    public function index()
    {
        return view('pengajuan.saranaPrasarana.index');
    }

    public function create()
    {
        return view('pengajuan.saranaPrasarana.create');
    }
}
