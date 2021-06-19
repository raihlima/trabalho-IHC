<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $fillable = [
    ];

    protected $dates = [
        'dataLimiteInscricao',
        'dataInicioCampeonato',
        'created_at',
        'updated_at',
        ];

    const PERGUNTAS = [

    ];
}
