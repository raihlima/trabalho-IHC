<?php

namespace App\Http\Controllers;

use App\Models\CoordenadorCurso;
use App\Models\Turma;
use App\Models\TurmaEstudante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CoordenadorCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function professor(){
        $usuario = Auth::user();
        $materia = DB::table('turma')
        ->join('disciplina','turma.id_disciplina','=','disciplina.id')
        ->select('disciplina.nome','disciplina.codigo','turma.codigo as turma_codigo','turma.id')
        ->where('turma.id_professor','=',$usuario->id)
        ->orderBy('disciplina.codigo','asc')
        ->get();
        return view('professor',compact('materia'));
    }

    public function listaProfessores(){
        $usuario = Auth::user();
        $coordenador = DB::table('coordenador_curso')->where('id_usuario', '=', $usuario->id)->first();
        
        if(isset($coordenador)){
            //dd($coordenador);
            $listaAluno = DB::table('estudante as e')
                            ->where('e.curso','=',$coordenador->curso)
                            ->get('id_usuario')
                            ->toArray();
                            $listaAluno = array_map(function ($value) {
                                return (array)$value;
                            }, $listaAluno);
                            //dd($listaAluno);
            $listaTurma = TurmaEstudante::whereIn('id_estudante',$listaAluno)
                            //->groupBy('id_turma')
                            ->get()
                            ->toArray();

            //dd($listaTurma);
            $lista = DB::table('professor as p')
                    ->join('users as u','u.id','=','p.id_usuario')
                    //->join('disciplina as d','d.id_professor','=','p.id_usuario')
                    ->join('turma as t','t.id_disciplina','=','p.id_usuario')
                    ->join('turma_estudante as te','te.id_turma','=','t.id')
                    ->join('estudante as e','e.id_usuario','=','te.id_estudante')
                    ->where('e.curso','=',$coordenador->curso)
                    ->orderBy('u.name','asc')
                    ->select('u.id','u.name','p.estagio_probatorio')
                    ->distinct()
                    ->get();
            //dd($lista);
            return view('lista_professores',compact('lista'));
        } else {
            return abort (404,'Não encontrado');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoordenadorCurso  $coordenadorCurso
     * @return \Illuminate\Http\Response
     */
    public function show(CoordenadorCurso $coordenadorCurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoordenadorCurso  $coordenadorCurso
     * @return \Illuminate\Http\Response
     */
    public function edit(CoordenadorCurso $coordenadorCurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoordenadorCurso  $coordenadorCurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoordenadorCurso $coordenadorCurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoordenadorCurso  $coordenadorCurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoordenadorCurso $coordenadorCurso)
    {
        //
    }
}
