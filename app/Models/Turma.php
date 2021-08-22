<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_inicio',
        'codigo',
        'id_disciplina',
        'id_professor'
    ];

    protected $dates = [
        'data_inicio',
        ];

    
    protected $table = 'turma';
    
}
