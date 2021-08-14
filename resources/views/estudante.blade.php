@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Novas avaliações </h5>
      <small>{{$disciplinas->count()}} disciplina(s)</small>
    </div>
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="list-group">
                            @foreach($disciplinas as $disciplina)
                            <a href="{{route ("estudante.avaliacao", $disciplina->te_id )}}" class="list-group-item list-group-item-action" aria-current="true">
                                Disciplina: {{$disciplina->codigo_disciplina}} - {{$disciplina->nome_disciplina}}<br>
                                Professor: {{$disciplina->nome_professor}}<br>
                                Turma: {{$disciplina->codigo_turma}}<br>
                            </a>
                            @endforeach

                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Avaliações Pendentes </h5>
                                <small>{{$disciplinasPendentes->count()}} disciplina(s)</small>
                                </div>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        @foreach($disciplinasPendentes as $disciplinaP)
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                Disciplina: {{$disciplinaP->codigo_disciplina}} - {{$disciplinaP->nome_disciplina}}<br>
                                Professor: {{$disciplinaP->nome_professor}}<br>
                                Turma: {{$disciplinaP->codigo_turma}}<br>
                            </a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Avaliações Finalizadas </h5>
                                    <small>{{$disciplinasConcluidas->count()}} disciplina(s)</small>
                                </div>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                             @foreach($disciplinasConcluidas as $disciplinaC)
                            <a href="#" class="list-group-item list-group-item-action disabled" aria-current="true">
                                Disciplina: {{$disciplinaC->codigo_disciplina}} - {{$disciplinaC->nome_disciplina}}<br>
                                Professor: {{$disciplinaC->nome_professor}}<br>
                                Turma: {{$disciplinaC->codigo_turma}}<br>
                            </a>
                            @endforeach
                        </div>
                        </div>
                    </div>
                    </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
