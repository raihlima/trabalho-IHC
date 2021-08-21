<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario = Auth::user();
        $estudante = DB::table('estudante')->where('id_usuario', '=', $usuario->id)->get();
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
        } else {
            return abort(404,'Não encontrado');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //dd($id);
        $usuario = Auth::user();
        $estudante = DB::table('estudante')->where('id_usuario', '=', $usuario->id)->get();

        if(!$estudante->isEmpty()){
            $teste = DB::table('turma_estudante as te') //Para saber se é o mesmo aluno a responder a avaliação
            ->where('te.id_estudante','=',$usuario->id)->get();
            if(!$teste->isEmpty()){
                $teste2 = DB::table('avaliacao as a') //Para saber se a avaliação já foi respondida
                        ->where('a.id_turma_estudante','=',$id)
                        ->get();
                if($teste2->isEmpty()){
                    $turma = DB::table('turma_estudante as te')
                    ->join('turma as t','t.id','=','te.id_turma')
                    ->join('disciplina as d','t.id_disciplina', '=' ,'d.id')
                    ->join('users as u','t.id_professor', '=' ,'u.id')
                    ->where('te.id','=',$id)
                    ->select('te.id as te_id','u.name as nome_professor','d.codigo as codigo_disciplina','d.nome as nome_disciplina','t.codigo as codigo_turma')
                    ->get();
                    //dd($turma);
                    //$turma = Campeonato::where('id', '=', $id)->first();
        
                    return view('avaliacao', compact('turma'));
                }

            }
        } 
            return abort(404,'Não encontrado');
        

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
        
        $camp = Avaliacao::create($request->all());
        return redirect()->route('estudante');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudante $estudante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudante $estudante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudante $estudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudante $estudante)
    {
        //
    }
}
