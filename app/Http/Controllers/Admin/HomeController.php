<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

    public function landingPage()
    {
        return view('admin.home.landingPage');
    }

    public function detailInformation(){
        return view('admin.home.detail_informasi');
    }
}
