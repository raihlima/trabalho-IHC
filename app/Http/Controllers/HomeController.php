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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function index()
    {
        $usuario = Auth::user();
        $professor = DB::table('professor')->where('id_usuario', '=', $usuario->id)->get();
        $estudante = DB::table('estudante')->where('id_usuario', '=', $usuario->id)->get();
        $progepe = DB::table('progepe')->where('id_usuario', '=', $usuario->id)->get();

        if(!$estudante->isEmpty()){
            //return view ('avaliacao');
            //$disciplinasMatriculadas = 
            $avaliacaoFeita = Avaliacao::get('id_turma_estudante')->toArray();
            
          /*$avaliacaoFeita = DB::table('avaliacao as a')
                            ->join('turma_estudante as te','te.id','=','a.id_turma_estudante')
                            ->where('te.id_estudante','=',$usuario->id)
                            //->select('a.id_turma_estudante')
                            ->get('a.id_turma_estudante')->toArray();
              */              
                            //dd($avaliacaoFeita);
            $disciplinas = DB::table('turma_estudante as te')
                           ->join('turma as t','t.id','=','te.id_turma')
                           ->join('disciplina as d','t.id_disciplina', '=' ,'d.id')
                           ->join('users as u','t.id_professor', '=' ,'u.id')
                           ->where('te.id_estudante','=',$usuario->id)
                           ->whereNotIn('te.id',$avaliacaoFeita)
                           ->orderBy('d.codigo','asc')
                           ->select('te.id as te_id','te.id_turma','u.name as nome_professor','d.codigo as codigo_disciplina','d.nome as nome_disciplina','t.codigo as codigo_turma')
                           ->get();
            //dd($disciplinas);
            $disciplinasPendentes = DB::table('turma_estudante as te')
                                    ->join('turma as t','t.id','=','te.id_turma')
                                    ->join('disciplina as d','t.id_disciplina', '=' ,'d.id')
                                    ->join('users as u','t.id_professor', '=' ,'u.id')
                                    ->join('avaliacao as a','te.id', '=' ,'a.id_turma_estudante')
                                    ->where('te.id_estudante','=',$usuario->id)
                                    ->where('a.concluido','=','0')
                                    ->orderBy('d.codigo','asc')
                                    ->select('te.id as te_id','te.id_turma','u.name as nome_professor','d.codigo as codigo_disciplina','d.nome as nome_disciplina','t.codigo as codigo_turma')
                                    ->get();

            $disciplinasConcluidas = DB::table('turma_estudante as te')
                                    ->join('turma as t','t.id','=','te.id_turma')
                                    ->join('disciplina as d','t.id_disciplina', '=' ,'d.id')
                                    ->join('users as u','t.id_professor', '=' ,'u.id')
                                    ->join('avaliacao as a','te.id', '=' ,'a.id_turma_estudante')
                                    ->where('te.id_estudante','=',$usuario->id)
                                    ->where('a.concluido','=','1')
                                    ->orderBy('d.codigo','asc')
                                    ->select('te.id_turma','u.name as nome_professor','d.codigo as codigo_disciplina','d.nome as nome_disciplina','t.codigo as codigo_turma')
                                    ->get();
            //dd($disciplinas);
            return view('estudante', compact('disciplinas','disciplinasPendentes','disciplinasConcluidas'));
        }
        else if(!$professor->isEmpty()){
            $chefe = DB::table('chefe_departamento')->where('id_usuario', '=', $usuario->id)->get();
            if(!$chefe->isEmpty()){
                return view('chefe');
            } else {
            $materia = DB::table('turma')
                       ->join('disciplina','turma.id_disciplina','=','disciplina.id')
                       ->select('disciplina.nome','disciplina.codigo','turma.codigo as turma_codigo','turma.id')
                       ->where('turma.id_professor','=',$usuario->id)
                       ->orderBy('disciplina.codigo','asc')
                       ->get();
            return view('professor',compact('materia'));
            }
        } else if(!$progepe->isEmpty()){
            $lista = DB::table('professor as p')
            ->join('users as u','u.id','=','p.id_usuario')
            ->where('estagio_probatorio','=','1')
            ->orderBy('u.name','asc')
            ->select('u.id','u.name','p.estagio_probatorio')
            ->get();
    //dd($lista);
            return view('lista_professores',compact('lista'));
        }
    }
}
