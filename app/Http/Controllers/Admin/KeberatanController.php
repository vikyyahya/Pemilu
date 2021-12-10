<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelengkapan;
use App\Models\Keberatan;

class KeberatanController extends Controller
{
    public function index()
    {
        $user = Auth()->user();
        if($user != null){
            $dpt = Keberatan::all();
            if($dpt != null){
                return view('admin.keberatan.index',compact('dpt','user'));
            }else{
                return view('admin.keberatan.index',compact('user'));
            }
        }else{
            return redirect()->route('login');
        }
        
    }

    public function create()
    {
        return view('admin.pengajuan.tutor.create');
    }
}
