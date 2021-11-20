<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelengkapan extends Model
{
    use HasFactory;

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
}
