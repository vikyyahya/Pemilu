<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelengkapan;

class KelengkapanController extends Controller
{
    public function index()
    {
        $user = Auth()->user();
        if($user != null){
            $data_kel = Kelengkapan::where('users_id',$user->id)->first();
            if($data_kel != null){
                return view('admin.kelengkapan.index',compact('data_kel','user'));
            }else{
                return view('admin.kelengkapan.index',compact('user'));
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
