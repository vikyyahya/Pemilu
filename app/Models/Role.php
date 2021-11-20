<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable=['role'];

    public function users()
    {
        return $this->hasOne(User::class, 'role_id', 'id');    
    }
}
