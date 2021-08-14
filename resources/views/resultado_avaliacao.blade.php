@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tabela') }}</div>
                <div class="card-body">
                    <p>Médias dos resultados das avaliações discentes</p>
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <td>ID</td>
                                <td>Curso</td>
                                <td>A</td>
                                <td>B</td>
                                <td>C</td>
                                <td>D</td>
                                <td>E</td>
                                <td>F</td>
                                <td>G</td>
                                <td>H</td>
                                <td>I</td>
                                <td>J</td>
                                <td>K</td>
                                <td>L</td>
                                <td>M</td>
                            </tr>
                         </thead>
                        <tbody>
                            @foreach($avaliacao as $ava)
                                <tr class='clickable-row' data-href='{{route ("chefe_departamento.lista_professores")}}'>
                                    <td>{{$ava->id_usuario}}</td>
                                    <td>{{$ava->curso}}</td>
                                    <td>{{$ava->p1}}</td>
                                    <td>{{$ava->p2}}</td>
                                    <td>{{$ava->p3}}</td>
                                    <td>{{$ava->p4}}</td>
                                    <td>{{$ava->p5}}</td>
                                    <td>{{$ava->p6}}</td>
                                    <td>{{$ava->p7}}</td>
                                    <td>{{$ava->p8}}</td>
                                    <td>{{$ava->p9}}</td>
                                    <td>{{$ava->p10}}</td>
                                    <td>{{$ava->p11}}</td>
                                    <td>{{$ava->p12}}</td>
                                    <td>{{$ava->p13}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
