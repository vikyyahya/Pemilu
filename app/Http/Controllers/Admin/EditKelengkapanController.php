<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelengkapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class EditKelengkapanController extends Controller
{
    public function index()
    {
        $user = Auth()->user();
        if($user != null){
            return view('admin.kelengkapan.edit_kelengkapan');
        }else{
            return redirect()->route('login');
        }
    }

    public function create(Request $request)
    {
        $user = Auth()->user();

        // Auth::login($user);
        if($user != null){

            $request->validate([
                'alamat'=>'required', 
                'kecamatan'=>'required',
                'kelurahan'=>'required',
                'nama_pimpinan'=>'required',
    
                'dokumen_npwp'=>'required',
                'scan_sk_izin_opr_lembaga'=>'required',
                'scan_rek_bank'=>'required',
                'scan_sertifikat_akreditasi'=>'required',
                
            ]);
            $data_user = Auth()->user();
            $dokumen_npwp = $request->dokumen_npwp;
            $dokumen_scan_sk_izin_opr_lembaga = $request->scan_sk_izin_opr_lembaga;
            $dokumen_scan_rek_bank =  $request->scan_rek_bank;
            $dokumen_scan_sertifikat_akreditasi = $request->scan_sertifikat_akreditasi;
    
            $filename_doc_npwp = time().'docnpwp'.'_'.$data_user->id.'.'.$dokumen_npwp->extension();
            $dokumen_npwp->move(public_path('file'),$filename_doc_npwp);
    
            $scan_sk_izin_opr_lembaga = time().'skizinoprlbg'.'_'.$data_user->id.'.'.$dokumen_scan_sk_izin_opr_lembaga->extension();
            $dokumen_scan_sk_izin_opr_lembaga->move(public_path('file'),$scan_sk_izin_opr_lembaga);
    
            $scan_rek_bank = time().'rekbank'.'_'.$data_user->id.'.'.$dokumen_scan_rek_bank->extension();
            $dokumen_scan_rek_bank->move(public_path('file'),$scan_rek_bank);
    
            $scan_sertifikat_akreditasi = time().'serakredit'.'_'.$data_user->id.'.'.$dokumen_scan_sertifikat_akreditasi->extension();
            $dokumen_scan_sertifikat_akreditasi->move(public_path('file'),$scan_sertifikat_akreditasi);
    
            $kelengkapan ;

            $data_kel = Kelengkapan::where('users_id',$user->id)->first();

            if($data_kel == null){
                $kelengkapan = new Kelengkapan;
            }else{
                $kelengkapan = Kelengkapan::where('users_id',$user->id)->first();

            }

            $kelengkapan->users_id = $user->id;
            $kelengkapan->alamat = $request->alamat;
            $kelengkapan->kecamatan_id = $request->kecamatan;
            $kelengkapan->kelurahan_id = $request->kelurahan;
            $kelengkapan->nama_pimpinan_lembaga = $request->nama_pimpinan;
            $kelengkapan->no_hp_pimpinan_lembaga = $request->no_pimpinan;
            $kelengkapan->npwp = $request->npwp;
            $kelengkapan->nama_lembaga_di_npwp = $request->nama_lembaga_npwp;
            $kelengkapan->dokumen_npwp = $filename_doc_npwp;
            $kelengkapan->no_sk_pendirian_lembaga = $request->no_sk_pendirian_lembaga;
            $kelengkapan->tgl_sk_pendiran_lembaga = $request->tgl_sk_pendiran_lembaga;
            $kelengkapan->no_sk_izin_opr_lembaga = $request->no_sk_izin_opr_lembaga;
            $kelengkapan->tgl_sk_izin_opr_lembaga = $request->tgl_sk_izin_opr_lembaga;
            $kelengkapan->scan_sk_izin_opr_lembaga = $scan_sk_izin_opr_lembaga;
            $kelengkapan->no_rek_bank_lembaga = $request->no_rek_bank_lembaga;
            $kelengkapan->rek_bank_atas_nama = $request->rek_bank_atas_nama;
            $kelengkapan->nama_bank = $request->nama_bank;
            $kelengkapan->cab_rek_bank = $request->cab_rek_bank;
            $kelengkapan->alamat_lembaga_pd_buku_rek = $request->alamat_lembaga_pd_buku_rek;
            $kelengkapan->scan_rek_bank = $scan_rek_bank;
            $kelengkapan->akreditasi = $request->akreditasi;
            $kelengkapan->hasil_akreditasi = $request->hasil_akreditasi;
            $kelengkapan->institusi_penerbit_akreditasi = $request->institusi_penerbit_akreditasi;
            $kelengkapan->scan_sertifikat_akreditasi = $scan_sertifikat_akreditasi;    
        
            if($data_kel == null){
                $kelengkapan->save();
            }else{
                $kelengkapan->update();
            }
    
            return view('admin.kelengkapan.index');

        }else{

            return redirect()->route('login');
        }

       
    }
}

 // 'alamat',
            // 'kecamatan_id',
            // 'kelurahan_id',
            // 'nama_pimpinan_lembaga',
            // 'no_hp_pimpinan_lembaga',
            // 'npwp',
            // 'no_sk_pendirian_lembaga',
            // 'tgl_sk_pendiran_lembaga',
            // 'no_sk_izin_opr_lembaga',
            // 'tgl_sk_izin_opr_lembaga',
            // 'scan_sk_izin_opr_lembaga',
            // 'no_rek_bank_lembaga',
            // 'rek_bank_atas_nama',
            // 'cab_rek_bank',
            // 'nama_lembaga_di_npwp',
            // 'dokumen_npwp',
            // 'ttd_pimpinan_lembaga',
            // 'alamat_lembaga_pd_buku_rek',
            // 'scan_rek_bank',
            // 'akreditasi',
            // 'hasil_akreditasi',
            // 'institusi_penerbit_akreditasi',
            // 'scan_sertifikat_akreditasi',
            
