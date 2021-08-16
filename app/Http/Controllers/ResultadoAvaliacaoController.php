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
                    ->get()->shuffle();
        //dd($avaliacao);

        //calculando a media
        $cont =0;
        $media = array (0,0,0,0,0,0,0,0,0,0,0,0,0);
        $mediaPor = array (0,0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($avaliacao as $ava){
            $media[0] = $media[0] + $ava->p1;
            $media[1] = $media[1] + $ava->p2;
            $media[2] = $media[2] + $ava->p3;
            $media[3] = $media[3] + $ava->p4;
            $media[4] = $media[4] + $ava->p5;
            $media[5] = $media[5] + $ava->p6;
            $media[6] = $media[6] + $ava->p7;
            $media[7] = $media[7] + $ava->p8;
            $media[8] = $media[8] + $ava->p9;
            $media[9] = $media[9] + $ava->p10;
            $media[10] = $media[10] + $ava->p11;
            $media[11] = $media[11] + $ava->p12;
            $media[12] = $media[12] + $ava->p13;

            $mediaPor[0] = $mediaPor[0] + $ava->p1;
            $mediaPor[1] = $mediaPor[1] + $ava->p2;
            $mediaPor[2] = $mediaPor[2] + $ava->p3;
            $mediaPor[3] = $mediaPor[3] + $ava->p4;
            $mediaPor[4] = $mediaPor[4] + $ava->p5;
            $mediaPor[5] = $mediaPor[5] + $ava->p6;
            $mediaPor[6] = $mediaPor[6] + $ava->p7;
            $mediaPor[7] = $mediaPor[7] + $ava->p8;
            $mediaPor[8] = $mediaPor[8] + $ava->p9;
            $mediaPor[9] = $mediaPor[9] + $ava->p10;
            $mediaPor[10] = $mediaPor[10] + $ava->p11;
            $mediaPor[11] = $mediaPor[11] + $ava->p12;
            $mediaPor[12] = $mediaPor[12] + $ava->p13;

            $cont = $cont +1;
        }

        for($i =0;$i<13;$i++){
            $media[$i] = number_format($media[$i]/$cont,2,',','');

            $mediaPor[$i] = number_format((float)(($mediaPor[$i]*100)/($cont*5)),2,',','');
        }
        
        //dd($mediaPor);
        return view ('resultado_avaliacao',compact('avaliacao','media','mediaPor'));
    }
}
