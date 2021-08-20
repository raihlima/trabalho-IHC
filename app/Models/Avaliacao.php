<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_turma_estudante',
        'concluido',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'a8',
        'a9',
        'a10',
        'data_resposta',
    ];

    protected $dates = [
        'data_resposta',
    ];

    const PERGUNTA = [




        'O professor disponibilizou o plano de curso da disciplina na primeira semana de aula?',
        'O professor é pontual?',
        'O professor é assíduo às aulas?',
        'O professor usa todo o tempo de aula?',
        'O professor está disponível no horário de atendimento?',
        'O professor tira dúvidas em sala de aula?',
        'O professor apresenta os conteúdos da disciplina de forma clara?',
        'O professor demonstra dominar o conteúdo da disciplina?',
        'O material utilizado em aula é atualizado?',
        'O professor apresenta exemplos em aula e faz ou propõe exercícios e/ou trabalhos práticos?',
        'As avaliações refletem o conteúdo apresentado em sala?',
        'As notas das avaliações foram publicadas até três dias antes da avaliação seguinte?',
        'O conteúdo programático da disciplina foi cumprido?',
        'Você acha que a bibliografia sugerida no Plano de Curso é adequada ao conteúdo da disciplina?',
        'Os objetivos da disciplina foram atendidos?',
        'Você considera a ementa da disciplina adequada ao curso?',
        'Você é pontual?',
        'Você é assíduo às aulas?',
        'Você procurou o professor, tutor ou monitor da disciplina para tirar dúvidas ao longo do semestre?',
        'Você considera que possuía a base teórica necessária para cursar esta disciplina?',
        'Você faz as atividades práticas propostas pelo professor?',
        'Você considera que se dedicou suficientemente à disciplina?',
        'Na sua opnião, suas notas refletem de modo fiel o conhecimento que você adquiriu ao longo da disciplina?'
    ];

    protected $table = 'avaliacao';
}
