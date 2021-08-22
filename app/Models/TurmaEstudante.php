<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurmaEstudante extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_estudante',
        'id_turma'
    ];

    protected $table = 'turma_estudante';
}
