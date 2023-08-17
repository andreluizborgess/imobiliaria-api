<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'celular',
        'email',
        'password'

    ];
}
