<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResultadoAvaliacaoController extends Controller
{
    //    
    public function index()
    {
        //
        //return view ('resultado_avaliacao');
    }

    public function relatorioAvaliacao($id){
        $avaliacao = DB::table('avaliacao as a')
                    ->join('turma_estudante as te','a.id_turma_estudante','=','te.id')
                    ->join('estudante as e','te.id_estudante','=','e.id_usuario')
                    ->where('te.id_turma','=',$id)
                    ->get();
        //dd($avaliacao);
        return view ('resultado_avaliacao',compact('avaliacao'));
    }
}
