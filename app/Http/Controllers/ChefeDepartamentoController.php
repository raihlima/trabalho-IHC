<?php

namespace App\Http\Controllers;

use App\Models\ChefeDepartamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChefeDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('chefe');
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
        $lista = DB::table('professor as p')
                ->join('users as u','u.id','=','p.id_usuario')
                ->orderBy('u.name','asc')
                ->select('u.id','u.name','p.estagio_probatorio')
                ->get();
        //dd($lista);
        return view('lista_professores',compact('lista'));
    }

    public function listaDisciplinas(){
        $lista = DB::table('disciplina as d')
                ->orderBy('d.codigo','asc')
                ->get();
        //dd($lista);
        return view('lista_disciplinas',compact('lista'));
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
     * @param  \App\Models\ChefeDepartamento  $chefeDepartamento
     * @return \Illuminate\Http\Response
     */
    public function show(ChefeDepartamento $chefeDepartamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChefeDepartamento  $chefeDepartamento
     * @return \Illuminate\Http\Response
     */
    public function edit(ChefeDepartamento $chefeDepartamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChefeDepartamento  $chefeDepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChefeDepartamento $chefeDepartamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChefeDepartamento  $chefeDepartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChefeDepartamento $chefeDepartamento)
    {
        //
    }
}
