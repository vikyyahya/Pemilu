<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;


use Validator;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('admin.register.index');
    }

    public function create()
    {
    
    }

    
    public function store(Request $request)
    {
        
        $stringnpsn = $request->input('npsn');

        if ($stringnpsn[0]=='P'){
            $daftar = Register::create([
                'npsn'=> $request->npsn,
                'nama_lembaga'=> $request->nama_lembaga,
                'email' => $request->email,
                'no_telepon'=> $request->no_telepon,
                'password'=> bcrypt($request['password']),
                'role_id'=> 2,
            ]);
        }else if ($stringnpsn[0]=='L') {
           
            $daftar = Register::create([
                'npsn'=> $request->npsn,
                'nama_lembaga'=> $request->nama_lembaga,
                'email' => $request->email,
                'no_telepon'=> $request->no_telepon,
                'password'=> bcrypt($request['password']),
                'role_id'=> 3,
            ]);
    
        }else if ($stringnpsn[0].$stringnpsn[1] =='TK'){
            $daftar = Register::create([
                'npsn'=> $request->npsn,
                'nama_lembaga'=> $request->nama_lembaga,
                'email' => $request->email,
                'no_telepon'=> $request->no_telepon,
                'password'=> bcrypt($request['password']),
                'role_id'=> 3,
            ]);
           
        }
        
        return redirect('login');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
