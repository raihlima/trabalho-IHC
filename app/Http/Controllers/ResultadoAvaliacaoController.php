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

    public function relatorioAvaliacaoDisciplina($id){
        $usuario = Auth::user();
        $chefe = DB::table('chefe_departamento')->where('id_usuario', '=', $usuario->id)->get();
        if(!$chefe->isEmpty()){
            
            $turmas = DB::table('turma as t')
                        ->where('t.id_disciplina','=',$id)
                        ->get();
            $disciplina = DB::table('disciplina as d')
                        ->where('d.id','=',$id)
                        ->get()->toArray();
            //$idTurmas = array();
            $avaliacaoTurmas = array();
            $matrizAvaliacao = array();
            $matrizAvaliacaoSemOutlier = array();
            $media = array();
            $mediaPor = array();
            $mediaSemOutlier = array();
            $mediaPorSemOutier = array();

            $resultado = array();
            foreach($turmas as $key=>$ava){
                //$idTurmas[$key] = $ava->id;
                $avaliacaoTurmas[$key] = DB::table('avaliacao as a')
                ->join('turma_estudante as te','a.id_turma_estudante','=','te.id')
                ->join('estudante as e','te.id_estudante','=','e.id_usuario')
                ->where('te.id_turma','=',$ava->id)
                ->get();
                $matrizAvaliacao[$key] = self::retornaMatriz($avaliacaoTurmas[$key],true);
                $media[$key] = self::retornaMedia($matrizAvaliacao[$key]);
                $mediaPor[$key] = self::retornaMediaPor($matrizAvaliacao[$key]);
                $matrizAvaliacaoSemOutlier[$key] = self::retornaMatrizSemOutlier($matrizAvaliacao[$key]);
                $mediaSemOutlier[$key] = self::retornaMedia($matrizAvaliacaoSemOutlier[$key]);
                $mediaPorSemOutier[$key] = self::retornaMediaPor($matrizAvaliacaoSemOutlier[$key]);
            
                $resultado[$key] = [$media[$key],$mediaPor[$key],$mediaSemOutlier[$key],$mediaPorSemOutier[$key]]; 
            }


            //dd($disciplina);

            return view ('resultado_avaliacao_disciplina',compact('resultado','disciplina'));
        } 
        return abort (404);
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
        $matriz = array();
        foreach ($avaliacao as $ava){
            $matriz[0][$cont] = $ava->p1;
            $matriz[1][$cont] = $ava->p2;
            $matriz[2][$cont] = $ava->p3;
            $matriz[3][$cont] = $ava->p4;
            $matriz[4][$cont] = $ava->p5;
            $matriz[5][$cont] = $ava->p6;
            $matriz[6][$cont] = $ava->p7;
            $matriz[7][$cont] = $ava->p8;
            $matriz[8][$cont] = $ava->p9;
            $matriz[9][$cont] = $ava->p10;
            $matriz[10][$cont] = $ava->p11;
            $matriz[11][$cont] = $ava->p12;
            $matriz[12][$cont] = $ava->p13;

            $cont = $cont +1;
        }
        /*
        for($i =0;$i<13;$i++){
            $media[$i] = number_format($media[$i]/$cont,2,',','');

            $mediaPor[$i] = number_format((float)(($mediaPor[$i]*100)/($cont*5)),1,',','');
        }
        */
        $media = self::retornaMedia($matriz);
        $mediaPor = self::retornaMediaPor($matriz);

        $matrizSemOutlier = self::retornaMatrizSemOutlier($matriz);
        $mediaSemOutlier = self::retornaMedia($matrizSemOutlier);
        $mediaSemOutlierPor = self::retornaMediaPor($matrizSemOutlier);

        
        $notasCursos = self::buscaNotaCurso($id);
        $mediaCursos = self::retornaMediaCursos($notasCursos);
        //dd($mediaCursos);
        $graficoCCD = self::preencheGraficoCurso($notasCursos);
        $graficoDispersao = self::preencheGraficoDispersao($matriz);
        //dd($notasCursos[3]);
        $data = array();
        $data[0] = $graficoCCD;
        $data[1] = $graficoDispersao;
        //dd($data['graficoDispersao']);
        return view ('resultado_avaliacao',compact('avaliacao','media','mediaPor','mediaSemOutlier','mediaSemOutlierPor','mediaCursos','notasCursos','data'))
                    ->with('graficoDispersao',json_encode($graficoDispersao));
    }

    private function preencheGraficoDispersao ($matriz){
        //dd($matriz);
        $resultado = array();
        $pergunta = Avaliacao::PERGUNTA;
        foreach ($matriz as $key=> $mat){
            $resultado[$key][0] = $pergunta[$key];
            foreach ($matriz[$key] as $j=> $vet){
                $resultado[$key][$j+1] = $vet;
            }
        }
        //dd($resultado);
        return $resultado;
    }

    private function preencheGraficoCurso ($notasCursos){
        //dd($mediaCursos);
        $matriz = array();
        $matriz[0] = self::retornaMatriz($notasCursos[0],true);
        $matriz[1] = self::retornaMatriz($notasCursos[1],true);
        $matriz[2] = self::retornaMatriz($notasCursos[2],true);
        $matriz[3] = self::retornaMatriz($notasCursos[3],true);

        $media[0][0] = self::retornaMedia($matriz[0]);
        $media[0][1] = self::retornaMedia($matriz[1]);
        $media[0][2] = self::retornaMedia($matriz[2]);
        $media[0][3] = self::retornaMedia($matriz[3]);

        //$res[] = ['Pergunta', 'Média'];
        $pergunta = Avaliacao::PERGUNTA;

        $res = array();
        $res [0][0] =  ['Pergunta', 'Média'];
        $res [1][0] =  ['Pergunta', 'Média'];
        $res [2][0] =  ['Pergunta', 'Média'];
        $res [3][0] =  ['Pergunta', 'Média'];
        //dd($media[0]);
        //dd($mediaCursos);
        
        foreach ($media[0][0] as $key => $val) {
            //dd($media[0][$key]);
            $res[0][($key+1)] = [$pergunta[$key], (double)$val];
        }
        foreach ($media[0][1] as $key => $val) {
            $res[1][($key+1)] = [$pergunta[$key], (double)$val];
        }
        foreach ($media[0][2] as $key => $val) {
            $res[2][($key+1)] = [$pergunta[$key], (double)$val];
        }
        foreach ($media[0][3] as $key => $val) {
            $res[3][($key+1)] = [$pergunta[$key], (double)$val];
        }

       // dd($res);
        return $res;
    }

    private function buscaNotaCurso($id){
        $busca = array();
        $busca[0] = self::buscaNotaCursoAux('CC-D',$id);
        $busca[1] = self::buscaNotaCursoAux('CC-N',$id);
        $busca[2] = self::buscaNotaCursoAux('SI',$id);
        $busca[3] = self::buscaNotaCursoAux('EC',$id);
        return $busca;
    }

    private function buscaNotaCursoAux($curso,$id){
        $avaliacao = DB::table('avaliacao as a')
        ->join('turma_estudante as te','a.id_turma_estudante','=','te.id')
        ->join('estudante as e','te.id_estudante','=','e.id_usuario')
        ->where('te.id_turma','=',$id)
        ->where('e.curso','=',$curso)
        ->get()->shuffle();

        return $avaliacao;
    }

    private function retornaMediaCursos($notasCursos){
        $media = array ();
        $matriz = array();
        $matriz[0] = self::retornaMatriz($notasCursos[0],false);
        $matriz[1] = self::retornaMatriz($notasCursos[1],false);
        $matriz[2] = self::retornaMatriz($notasCursos[2],false);
        $matriz[3] = self::retornaMatriz($notasCursos[3],false);

        $media[0][0] = self::retornaMedia($matriz[0]);
        $media[0][1] = self::retornaMedia($matriz[1]);
        $media[0][2] = self::retornaMedia($matriz[2]);
        $media[0][3] = self::retornaMedia($matriz[3]);

        $media[1][0] = self::retornaMediaPor($matriz[0]);
        $media[1][1] = self::retornaMediaPor($matriz[1]);
        $media[1][2] = self::retornaMediaPor($matriz[2]);
        $media[1][3] = self::retornaMediaPor($matriz[3]);

        $media[2][0] = self::retornaMedia(self::retornaMatrizSemOutlier($matriz[0]));
        $media[2][1] = self::retornaMedia(self::retornaMatrizSemOutlier($matriz[1]));
        $media[2][2] = self::retornaMedia(self::retornaMatrizSemOutlier($matriz[2]));
        $media[2][3] = self::retornaMedia(self::retornaMatrizSemOutlier($matriz[3]));

        $media[3][0] = self::retornaMediaPor(self::retornaMatrizSemOutlier($matriz[0]));
        $media[3][1] = self::retornaMediaPor(self::retornaMatrizSemOutlier($matriz[1]));
        $media[3][2] = self::retornaMediaPor(self::retornaMatrizSemOutlier($matriz[2]));
        $media[3][3] = self::retornaMediaPor(self::retornaMatrizSemOutlier($matriz[3]));

        return $media;
    }

    private function retornaMatriz($curso, $grafico){
        $media = array ();
        $matriz = array();
        foreach ($curso as $cont => $ava){
            $matriz[0][$cont] = $ava->p1;
            $matriz[1][$cont] = $ava->p2;
            $matriz[2][$cont] = $ava->p3;
            $matriz[3][$cont] = $ava->p4;
            $matriz[4][$cont] = $ava->p5;
            $matriz[5][$cont] = $ava->p6;
            $matriz[6][$cont] = $ava->p7;
            $matriz[7][$cont] = $ava->p8;
            $matriz[8][$cont] = $ava->p9;
            $matriz[9][$cont] = $ava->p10;
            $matriz[10][$cont] = $ava->p11;
            $matriz[11][$cont] = $ava->p12;
            $matriz[12][$cont] = $ava->p13;

            if($grafico){
                $matriz[13][$cont] = $ava->a1;
                $matriz[14][$cont] = $ava->a2;
                $matriz[15][$cont] = $ava->a3;
                $matriz[16][$cont] = $ava->a4;
                $matriz[17][$cont] = $ava->a5;
                $matriz[18][$cont] = $ava->a6;
                $matriz[19][$cont] = $ava->a7;
                $matriz[20][$cont] = $ava->a8;
                $matriz[21][$cont] = $ava->a9;
                $matriz[22][$cont] = $ava->a10;
            }
        }
        //$media = self::retornaMedia($matriz);
        return $matriz;
    }

    private function retornaMedia($arr){
        $mediaSemOutlier = array();
        foreach ($arr as $i=> $ava){
            $cont = 0;
            $mediaSemOutlier[$i] = 0;
            foreach ($arr[$i] as $key=> $ava){
                $mediaSemOutlier[$i] = $mediaSemOutlier[$i] + $arr[$i][$key];
                $cont= $cont +1;
            }
            //$mediaSemOutlier[$i] = $mediaSemOutlier[$i]/$cont;
            $mediaSemOutlier[$i] = number_format($mediaSemOutlier[$i]/$cont,2,'.','');
        }
        return $mediaSemOutlier;
    }

    private function retornaMediaPor($arr){
        $mediaSemOutlier = array();
        foreach ($arr as $i=> $ava){
            $cont = 0;
            $mediaSemOutlier[$i] = 0;
            foreach ($arr[$i] as $key=> $ava){
                $mediaSemOutlier[$i] = $mediaSemOutlier[$i] + $arr[$i][$key];
                $cont= $cont +1;
            }
            $mediaSemOutlier[$i] = number_format((float)(($mediaSemOutlier[$i]*100)/($cont*5)),1,',','');
        }
        return $mediaSemOutlier;
    }

    private function retornaMatrizSemOutlier($arr){
        $matrizSemOutlier = array();

        foreach ($arr as $key => $ava){
            $matrizSemOutlier[$key] = self::remove_outliers($arr[$key],1);
        }

        return $matrizSemOutlier;
    }

    private function remove_outliers($dataset, $magnitude = 1) {

        $count = count($dataset);
        $mean = array_sum($dataset) / $count; // Calculate the mean
        $deviation = sqrt(array_sum(array_map("self::sd_square", $dataset, array_fill(0, $count, $mean))) / $count) * $magnitude; // Calculate standard deviation and times by magnitude
      
        return array_filter($dataset, function($x) use ($mean, $deviation) { return ($x <= $mean + $deviation && $x >= $mean - $deviation); }); // Return filtered array of values that lie within $mean +- $deviation.
      }
      
    private function sd_square($x, $mean) {
        return pow($x - $mean, 2);
    }
}
