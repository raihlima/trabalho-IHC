<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfessorController extends Controller
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
        $professor = DB::table('professor')->where('id_usuario', '=', $usuario->id)->get();

        if(!$professor->isEmpty()){
            $chefe = DB::table('chefe_departamento')->where('id_usuario', '=', $usuario->id)->get();
            $materia = DB::table('turma')
                       ->join('disciplina','turma.id_disciplina','=','disciplina.id')
                       ->select('disciplina.nome','disciplina.codigo','turma.codigo as turma_codigo','turma.id')
                       ->where('turma.id_professor','=',$usuario->id)
                       ->orderBy('disciplina.codigo','asc')
                       ->get();
            return view('professor',compact('materia'));
        } else {
            return abort (404);
            //return abort(404, 'Nao encontrado',[ "refresh:5;url=wherever.php" ]);
        }
    }

    public function showDisciplinas($id){
        $usuario = Auth::user();
        $professor = DB::table('professor')->where('id_usuario', '=', $usuario->id)->where('estagio_probatorio','=',1)->get();
        $estudante = DB::table('estudante')->where('id_usuario', '=', $usuario->id)->get();
        $progepe = DB::table('progepe')->where('id_usuario', '=', $usuario->id)->get();
        $chefe = DB::table('chefe_departamento')->where('id_usuario', '=', $usuario->id)->get();

        if(!$chefe->isEmpty() || (!$progepe->isEmpty() && !$professor->isEmpty())){
            $materia = DB::table('turma')
            ->join('disciplina','turma.id_disciplina','=','disciplina.id')
            ->select('disciplina.nome','disciplina.codigo','turma.codigo as turma_codigo','turma.id')
            ->where('turma.id_professor','=',$id)
            ->orderBy('disciplina.codigo','asc')
            ->get();
            return view('professor',compact('materia'));
        } else {
            return abort (404, 'Nao encontrado');
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
        //return view ('professor');
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
     * @param  \App\Models\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $Professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $Professor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $Professor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $Professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $Professor)
    {
        //
    }
}
