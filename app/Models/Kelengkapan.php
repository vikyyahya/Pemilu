<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelengkapan extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = "kelengkapan";

    protected $fillable = [
        'deskripsi',
        'website',
        'alamat',
        'kecamatan_id',
        'kelurahan_id',
        'nama_pimpinan_lembaga',
        'no_hp_pimpinan_lembaga',
        'npwp',
        'no_sk_pendirian_lembaga',
        'tgl_sk_pendiran_lembaga',
        'no_sk_izin_opr_lembaga',
        'tgl_sk_izin_opr_lembaga',
        'scan_sk_izin_opr_lembaga',
        'no_rek_bank_lembaga',
        'rek_bank_atas_nama',
        'cab_rek_bank',
        'nama_lembaga_di_npwp',
        'dokumen_npwp',
        'ttd_pimpinan_lembaga',
        'alamat_lembaga_pd_buku_rek',
        'scan_rek_bank',
        'akreditasi',
        'hasil_akreditasi',
        'institusi_penerbit_akreditasi',
        'scan_sertifikat_akreditasi',
    ];

    public function user() {
		return $this->belongsTo(Users::class, 'users_id');
	}
}
