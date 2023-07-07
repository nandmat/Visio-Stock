<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermissao extends Model
{
    use HasFactory;

    protected $table = 'user_permissoes';

    protected $fillable = [
        'id',
        'user_id',
        'permissao_id',
    ];
}
