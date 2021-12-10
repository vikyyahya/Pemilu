<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelengkapan;
use App\Models\Dpt;

class DptController extends Controller
{
    public function index()
    {
        $user = Auth()->user();
        if($user != null){
            $dpt = Dpt::all();
            if($dpt != null){
                return view('admin.dpt.index',compact('dpt','user'));
            }else{
                return view('admin.dpt.index',compact('user'));
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
