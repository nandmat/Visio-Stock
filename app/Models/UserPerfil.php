<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPerfil extends Model
{
    use HasFactory;

    protected $table = 'user_perfis';

    protected $fillable = [
        'id',
        'user_id',
        'perfil_id',
    ];
}
