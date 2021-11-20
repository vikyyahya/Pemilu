<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> d403ef1127395125bfa3713ea62fc79e68ed5aaf

class Kelengkapan extends Model
{
    use HasFactory;

<<<<<<< HEAD
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
=======
    use softDeletes;

    protected $table = 'kelengkapan';
	// protected $primaryKey = 'id';
	// protected $guarded = [];
	protected $fillable = [
		'users_id',
		'deskripsi',
		'website',
		'alamat',
		'foto_user'
	];

    public function user() {
		return $this->belongsTo(Users::class, 'users_id');
	}
>>>>>>> d403ef1127395125bfa3713ea62fc79e68ed5aaf
}
