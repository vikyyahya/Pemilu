<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\RegisterController;

class Register extends Model
{
    protected $table = "users";
    protected $fillable = ['nik','nama_lembaga','email','no_telepon','password','role_id'];
    public $timestamps = false;

    
}
