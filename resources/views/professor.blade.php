@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Disciplinas') }}</div>

                    <div class="card-body">
                        <div class="list-group">
                            @foreach($materia as $materias)
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                
                                Codigo: {{$materias->codigo}} <br> 
                                Disciplina: {{$materias->nome}}<br>
                                Turma: {{$materias->turma_codigo}}<br>
                            </a>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
