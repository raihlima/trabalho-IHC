@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Disciplinas lecionadas</h5>
                    <p class="card-text">Entrar como professor sem privilégios e ver suas disciplinas lecionadas.</p>
                    <a href="{{route ("chefe_departamento.professor")}}" class="stretched-link"></a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ver lista de professores</h5>
                    <p class="card-text">Buscar algum professor e ver como foi suas avaliações.</p>
                    <a href="{{route ("chefe_departamento.lista_professores")}}" class="stretched-link"></a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ver lista de disciplinas</h5>
                    <p class="card-text">Buscar alguma disciplina e ver como foi suas avaliações.</p>
                    <a href="{{route ("chefe_departamento.lista_disciplinas")}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
