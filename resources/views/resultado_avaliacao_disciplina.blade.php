@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">{{ __('Disciplina') }}</div>

                <div class="card-body">
                     Código: {{$disciplina[0]->codigo}}
                <br> Nome: {{$disciplina[0]->nome}}
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Gráfico de Médias com Outlier') }}</div>

                <div class="card-body">

                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Gráfico de Médias sem Outlier') }}</div>

                <div class="card-body">

                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection
