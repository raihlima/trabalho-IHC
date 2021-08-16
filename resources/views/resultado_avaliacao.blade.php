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
                            @foreach($avaliacao as $key => $ava)
                                <tr>
                                    <td>D{{$key+1}}</td>
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
                            <tr class="table-success">
                                    <td>Média</td>
                                    <td>Com Outlier D2</td>
                                    <td>{{$media[0]}}</td>
                                    <td>{{$media[1]}}</td>
                                    <td>{{$media[2]}}</td>
                                    <td>{{$media[3]}}</td>
                                    <td>{{$media[4]}}</td>
                                    <td>{{$media[5]}}</td>
                                    <td>{{$media[6]}}</td>
                                    <td>{{$media[7]}}</td>
                                    <td>{{$media[8]}}</td>
                                    <td>{{$media[9]}}</td>
                                    <td>{{$media[10]}}</td>
                                    <td>{{$media[11]}}</td>
                                    <td>{{$media[12]}}</td>
                            </tr>
                            <tr class="table-info">
                                    <td>Média</td>
                                    <td>Com Outlier D2%</td>
                                    <td>{{$mediaPor[0]}}</td>
                                    <td>{{$mediaPor[1]}}</td>
                                    <td>{{$mediaPor[2]}}</td>
                                    <td>{{$mediaPor[3]}}</td>
                                    <td>{{$mediaPor[4]}}</td>
                                    <td>{{$mediaPor[5]}}</td>
                                    <td>{{$mediaPor[6]}}</td>
                                    <td>{{$mediaPor[7]}}</td>
                                    <td>{{$mediaPor[8]}}</td>
                                    <td>{{$mediaPor[9]}}</td>
                                    <td>{{$mediaPor[10]}}</td>
                                    <td>{{$mediaPor[11]}}</td>
                                    <td>{{$mediaPor[12]}}</td>
                            </tr>
                            <tr class="table-success">
                                    <td>Média</td>
                                    <td>Sem Outlier D2</td>
                                    <td>{{$mediaSemOutlier[0]}}</td>
                                    <td>{{$mediaSemOutlier[1]}}</td>
                                    <td>{{$mediaSemOutlier[2]}}</td>
                                    <td>{{$mediaSemOutlier[3]}}</td>
                                    <td>{{$mediaSemOutlier[4]}}</td>
                                    <td>{{$mediaSemOutlier[5]}}</td>
                                    <td>{{$mediaSemOutlier[6]}}</td>
                                    <td>{{$mediaSemOutlier[7]}}</td>
                                    <td>{{$mediaSemOutlier[8]}}</td>
                                    <td>{{$mediaSemOutlier[9]}}</td>
                                    <td>{{$mediaSemOutlier[10]}}</td>
                                    <td>{{$mediaSemOutlier[11]}}</td>
                                    <td>{{$mediaSemOutlier[12]}}</td>
                            </tr>
                            <tr class="table-info">
                                    <td>Média</td>
                                    <td>Sem Outlier D2%</td>
                                    <td>{{$mediaSemOutlierPor[0]}}</td>
                                    <td>{{$mediaSemOutlierPor[1]}}</td>
                                    <td>{{$mediaSemOutlierPor[2]}}</td>
                                    <td>{{$mediaSemOutlierPor[3]}}</td>
                                    <td>{{$mediaSemOutlierPor[4]}}</td>
                                    <td>{{$mediaSemOutlierPor[5]}}</td>
                                    <td>{{$mediaSemOutlierPor[6]}}</td>
                                    <td>{{$mediaSemOutlierPor[7]}}</td>
                                    <td>{{$mediaSemOutlierPor[8]}}</td>
                                    <td>{{$mediaSemOutlierPor[9]}}</td>
                                    <td>{{$mediaSemOutlierPor[10]}}</td>
                                    <td>{{$mediaSemOutlierPor[11]}}</td>
                                    <td>{{$mediaSemOutlierPor[12]}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
