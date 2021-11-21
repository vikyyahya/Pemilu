<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Role;
use App\Models\Kelengkapan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        //
    }

    public function profil($id) {
        $user = Kelengkapan::leftJoin('users', 'users.id', 'kelengkapan.users_id')
                ->select('kelengkapan.*', 'npsn', 'nama_lembaga', 'email', 'no_telepon')
                ->where('users_id', $id)
                ->get()
                ->first();

        if ($id != Auth::user()->id) {
            return view('notfound.notfound');
        }
        
        return view('admin.profil.index', compact('user'));
    }

    public function edit($id)
    {
        $edit_user = Kelengkapan::leftJoin('users', 'users.id', 'kelengkapan.users_id')
                ->select('kelengkapan.*', 'npsn', 'nama_lembaga', 'email', 'no_telepon')
                ->where('users_id', $id)
                ->get()
                ->first();

        $role = Role::all();

        return view('admin.profil.edit', compact('edit_user', 'role'));
    }

    public function update(Request $request, $id)
    {
        $user = Kelengkapan::leftJoin('users', 'users.id', 'kelengkapan.users_id')
                ->select('kelengkapan.*', 'npsn', 'nama_lembaga', 'email', 'no_telepon')
                ->where('users_id', $id)
                ->get()
                ->first();
        $update_user = $request->all();

        $validasi = Validator::make($update_user, [
            'npsn' => 'required',
            'nama_lembaga' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'foto_user' => 'sometimes|nullable|mimes:jpg,jpeg,png|max:1000',
            'deskripsi' => 'required'
        ],
        [
            'npsn.required' => 'NPSN Harus Diisi',
            'nama_lembaga.required' => 'Nama Lembaga Harus Diisi',
            'email.required' => 'Email Harus Diisi',
            'no_telepon.required' => 'NO. Telepon Harus Diisi',
            'alamat.required' => 'Alamat Harus Diisi',
            'website.required' => 'Website Harus Diisi',
            'deskripsi.required' => 'Deskripsi Harus Diisi'
        ]);

        if ($validasi->fails()) {
            return redirect()->route('profil.edit', $id)->withErrors($validasi)->withInput();
        }

        if ($request->hasFile('foto_user')) {
            if ($request->file('foto_user')) {
                Storage::disk('upload')->delete($user->foto_user);

                $photo      = $request->file('foto_user');
                $extention  = $photo->getClientOriginalExtension();

                $namaFoto = "users/" . date('YmdHis') . "." . $extention;
                $upload_path = 'uploads/users';
                $request->file('foto_user')->move($upload_path, $namaFoto);

                $update_user['foto_user'] = $namaFoto;
            }
        }

        $user->update($update_user);
        return redirect()->route('profil.profil', $id)->with('status', 'Data berhasil diubah');
    }
}
