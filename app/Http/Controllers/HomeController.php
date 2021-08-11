<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
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

        if(!$estudante->isEmpty()){
            //$disciplinasMatriculadas = 
            return view('estudante');
        }
        else if(!$professor->isEmpty()){
            return view('professor');
        } /else {
            return view('home');
        }/

    }
}
