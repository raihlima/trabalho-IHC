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
                    <br>

                </div>
            </div>
            <br>
            <div class="card text-center">
                <div class="card-header">
                    Avaliação separada por cursos
                    <ul class="nav nav-tabs card-header-tabs">
                        @if(!$notasCursos[0]->isEmpty())
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="CC-D-tab" data-toggle="tab" href="#CC-D" role="tab" aria-controls="CC-D" aria-selected="true">CC-D</a>
                        </li>
                        @endif
                        @if(!$notasCursos[1]->isEmpty())
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="CC-N-tab" data-toggle="tab" href="#CC-N" role="tab" aria-controls="CC-N" aria-selected="false">CC-N</a>
                        </li>
                        @endif
                        @if(!$notasCursos[2]->isEmpty())
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="SI-tab" data-toggle="tab" href="#SI" role="tab" aria-controls="SI" aria-selected="false">SI  </a>
                        </li>
                        @endif
                        @if(!$notasCursos[3]->isEmpty())
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="EC-tab" data-toggle="tab" href="#EC" role="tab" aria-controls="EC" aria-selected="false">EC  </a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        @if(!$notasCursos[0]->isEmpty())
                        <div class="tab-pane fade show active" id="CC-D" role="tabpanel" aria-labelledby="CC-D-tab">
                            <div>
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
                                        @foreach($notasCursos[0] as $key => $ava)
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
                                                <td>{{$mediaCursos[0][0][0]}}</td>
                                                <td>{{$mediaCursos[0][0][1]}}</td>
                                                <td>{{$mediaCursos[0][0][2]}}</td>
                                                <td>{{$mediaCursos[0][0][3]}}</td>
                                                <td>{{$mediaCursos[0][0][4]}}</td>
                                                <td>{{$mediaCursos[0][0][5]}}</td>
                                                <td>{{$mediaCursos[0][0][6]}}</td>
                                                <td>{{$mediaCursos[0][0][7]}}</td>
                                                <td>{{$mediaCursos[0][0][8]}}</td>
                                                <td>{{$mediaCursos[0][0][9]}}</td>
                                                <td>{{$mediaCursos[0][0][10]}}</td>
                                                <td>{{$mediaCursos[0][0][11]}}</td>
                                                <td>{{$mediaCursos[0][0][12]}}</td>
                                            </tr>
                                            <tr class="table-info">
                                                <td>Média</td>
                                                <td>Com Outlier D2%</td>
                                                <td>{{$mediaCursos[1][0][0]}}</td>
                                                <td>{{$mediaCursos[1][0][1]}}</td>
                                                <td>{{$mediaCursos[1][0][2]}}</td>
                                                <td>{{$mediaCursos[1][0][3]}}</td>
                                                <td>{{$mediaCursos[1][0][4]}}</td>
                                                <td>{{$mediaCursos[1][0][5]}}</td>
                                                <td>{{$mediaCursos[1][0][6]}}</td>
                                                <td>{{$mediaCursos[1][0][7]}}</td>
                                                <td>{{$mediaCursos[1][0][8]}}</td>
                                                <td>{{$mediaCursos[1][0][9]}}</td>
                                                <td>{{$mediaCursos[1][0][10]}}</td>
                                                <td>{{$mediaCursos[1][0][11]}}</td>
                                                <td>{{$mediaCursos[1][0][12]}}</td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Média</td>
                                                <td>Sem Outlier D2</td>
                                                <td>{{$mediaCursos[2][0][0]}}</td>
                                                <td>{{$mediaCursos[2][0][1]}}</td>
                                                <td>{{$mediaCursos[2][0][2]}}</td>
                                                <td>{{$mediaCursos[2][0][3]}}</td>
                                                <td>{{$mediaCursos[2][0][4]}}</td>
                                                <td>{{$mediaCursos[2][0][5]}}</td>
                                                <td>{{$mediaCursos[2][0][6]}}</td>
                                                <td>{{$mediaCursos[2][0][7]}}</td>
                                                <td>{{$mediaCursos[2][0][8]}}</td>
                                                <td>{{$mediaCursos[2][0][9]}}</td>
                                                <td>{{$mediaCursos[2][0][10]}}</td>
                                                <td>{{$mediaCursos[2][0][11]}}</td>
                                                <td>{{$mediaCursos[2][0][12]}}</td>
                                            </tr>
                                            <tr class="table-info">
                                                <td>Média</td>
                                                <td>Sem Outlier D2%</td>
                                                <td>{{$mediaCursos[3][0][0]}}</td>
                                                <td>{{$mediaCursos[3][0][1]}}</td>
                                                <td>{{$mediaCursos[3][0][2]}}</td>
                                                <td>{{$mediaCursos[3][0][3]}}</td>
                                                <td>{{$mediaCursos[3][0][4]}}</td>
                                                <td>{{$mediaCursos[3][0][5]}}</td>
                                                <td>{{$mediaCursos[3][0][6]}}</td>
                                                <td>{{$mediaCursos[3][0][7]}}</td>
                                                <td>{{$mediaCursos[3][0][8]}}</td>
                                                <td>{{$mediaCursos[3][0][9]}}</td>
                                                <td>{{$mediaCursos[3][0][10]}}</td>
                                                <td>{{$mediaCursos[3][0][11]}}</td>
                                                <td>{{$mediaCursos[3][0][12]}}</td>
                                            </tr>
                                    <tbody>
                                </table>
                            </div>
                            <div>

                                <div id="chart_div" style="width: 900px; height: 300px;"></div>
                            </div>
                        </div>
                        @endif
                        @if(!$notasCursos[1]->isEmpty())
                        <div class="tab-pane fade" id="CC-N" role="tabpanel" aria-labelledby="CC-N-tab">
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
                                    @foreach($notasCursos[1] as $key => $ava)
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
                                            <td>{{$mediaCursos[0][1][0]}}</td>
                                            <td>{{$mediaCursos[0][1][1]}}</td>
                                            <td>{{$mediaCursos[0][1][2]}}</td>
                                            <td>{{$mediaCursos[0][1][3]}}</td>
                                            <td>{{$mediaCursos[0][1][4]}}</td>
                                            <td>{{$mediaCursos[0][1][5]}}</td>
                                            <td>{{$mediaCursos[0][1][6]}}</td>
                                            <td>{{$mediaCursos[0][1][7]}}</td>
                                            <td>{{$mediaCursos[0][1][8]}}</td>
                                            <td>{{$mediaCursos[0][1][9]}}</td>
                                            <td>{{$mediaCursos[0][1][10]}}</td>
                                            <td>{{$mediaCursos[0][1][11]}}</td>
                                            <td>{{$mediaCursos[0][1][12]}}</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Média</td>
                                            <td>Com Outlier D2%</td>
                                            <td>{{$mediaCursos[1][1][0]}}</td>
                                            <td>{{$mediaCursos[1][1][1]}}</td>
                                            <td>{{$mediaCursos[1][1][2]}}</td>
                                            <td>{{$mediaCursos[1][1][3]}}</td>
                                            <td>{{$mediaCursos[1][1][4]}}</td>
                                            <td>{{$mediaCursos[1][1][5]}}</td>
                                            <td>{{$mediaCursos[1][1][6]}}</td>
                                            <td>{{$mediaCursos[1][1][7]}}</td>
                                            <td>{{$mediaCursos[1][1][8]}}</td>
                                            <td>{{$mediaCursos[1][1][9]}}</td>
                                            <td>{{$mediaCursos[1][1][10]}}</td>
                                            <td>{{$mediaCursos[1][1][11]}}</td>
                                            <td>{{$mediaCursos[1][1][12]}}</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td>Média</td>
                                            <td>Sem Outlier D2</td>
                                            <td>{{$mediaCursos[2][1][0]}}</td>
                                            <td>{{$mediaCursos[2][1][1]}}</td>
                                            <td>{{$mediaCursos[2][1][2]}}</td>
                                            <td>{{$mediaCursos[2][1][3]}}</td>
                                            <td>{{$mediaCursos[2][1][4]}}</td>
                                            <td>{{$mediaCursos[2][1][5]}}</td>
                                            <td>{{$mediaCursos[2][1][6]}}</td>
                                            <td>{{$mediaCursos[2][1][7]}}</td>
                                            <td>{{$mediaCursos[2][1][8]}}</td>
                                            <td>{{$mediaCursos[2][1][9]}}</td>
                                            <td>{{$mediaCursos[2][1][10]}}</td>
                                            <td>{{$mediaCursos[2][1][11]}}</td>
                                            <td>{{$mediaCursos[2][1][12]}}</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Média</td>
                                            <td>Sem Outlier D2%</td>
                                            <td>{{$mediaCursos[3][1][0]}}</td>
                                            <td>{{$mediaCursos[3][1][1]}}</td>
                                            <td>{{$mediaCursos[3][1][2]}}</td>
                                            <td>{{$mediaCursos[3][1][3]}}</td>
                                            <td>{{$mediaCursos[3][1][4]}}</td>
                                            <td>{{$mediaCursos[3][1][5]}}</td>
                                            <td>{{$mediaCursos[3][1][6]}}</td>
                                            <td>{{$mediaCursos[3][1][7]}}</td>
                                            <td>{{$mediaCursos[3][1][8]}}</td>
                                            <td>{{$mediaCursos[3][1][9]}}</td>
                                            <td>{{$mediaCursos[3][1][10]}}</td>
                                            <td>{{$mediaCursos[3][1][11]}}</td>
                                            <td>{{$mediaCursos[3][1][12]}}</td>
                                        </tr>
                                <tbody>
                            </table>
                        </div>
                        @endif
                        @if(!$notasCursos[2]->isEmpty())
                        <div class="tab-pane fade" id="SI" role="tabpanel" aria-labelledby="SI-tab">
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
                                    @foreach($notasCursos[2] as $key => $ava)
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
                                            <td>{{$mediaCursos[0][2][0]}}</td>
                                            <td>{{$mediaCursos[0][2][1]}}</td>
                                            <td>{{$mediaCursos[0][2][2]}}</td>
                                            <td>{{$mediaCursos[0][2][3]}}</td>
                                            <td>{{$mediaCursos[0][2][4]}}</td>
                                            <td>{{$mediaCursos[0][2][5]}}</td>
                                            <td>{{$mediaCursos[0][2][6]}}</td>
                                            <td>{{$mediaCursos[0][2][7]}}</td>
                                            <td>{{$mediaCursos[0][2][8]}}</td>
                                            <td>{{$mediaCursos[0][2][9]}}</td>
                                            <td>{{$mediaCursos[0][2][10]}}</td>
                                            <td>{{$mediaCursos[0][2][11]}}</td>
                                            <td>{{$mediaCursos[0][2][12]}}</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Média</td>
                                            <td>Com Outlier D2%</td>
                                            <td>{{$mediaCursos[1][2][0]}}</td>
                                            <td>{{$mediaCursos[1][2][1]}}</td>
                                            <td>{{$mediaCursos[1][2][2]}}</td>
                                            <td>{{$mediaCursos[1][2][3]}}</td>
                                            <td>{{$mediaCursos[1][2][4]}}</td>
                                            <td>{{$mediaCursos[1][2][5]}}</td>
                                            <td>{{$mediaCursos[1][2][6]}}</td>
                                            <td>{{$mediaCursos[1][2][7]}}</td>
                                            <td>{{$mediaCursos[1][2][8]}}</td>
                                            <td>{{$mediaCursos[1][2][9]}}</td>
                                            <td>{{$mediaCursos[1][2][10]}}</td>
                                            <td>{{$mediaCursos[1][2][11]}}</td>
                                            <td>{{$mediaCursos[1][2][12]}}</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td>Média</td>
                                            <td>Sem Outlier D2</td>
                                            <td>{{$mediaCursos[2][2][0]}}</td>
                                            <td>{{$mediaCursos[2][2][1]}}</td>
                                            <td>{{$mediaCursos[2][2][2]}}</td>
                                            <td>{{$mediaCursos[2][2][3]}}</td>
                                            <td>{{$mediaCursos[2][2][4]}}</td>
                                            <td>{{$mediaCursos[2][2][5]}}</td>
                                            <td>{{$mediaCursos[2][2][6]}}</td>
                                            <td>{{$mediaCursos[2][2][7]}}</td>
                                            <td>{{$mediaCursos[2][2][8]}}</td>
                                            <td>{{$mediaCursos[2][2][9]}}</td>
                                            <td>{{$mediaCursos[2][2][10]}}</td>
                                            <td>{{$mediaCursos[2][2][11]}}</td>
                                            <td>{{$mediaCursos[2][2][12]}}</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Média</td>
                                            <td>Sem Outlier D2%</td>
                                            <td>{{$mediaCursos[3][2][0]}}</td>
                                            <td>{{$mediaCursos[3][2][1]}}</td>
                                            <td>{{$mediaCursos[3][2][2]}}</td>
                                            <td>{{$mediaCursos[3][2][3]}}</td>
                                            <td>{{$mediaCursos[3][2][4]}}</td>
                                            <td>{{$mediaCursos[3][2][5]}}</td>
                                            <td>{{$mediaCursos[3][2][6]}}</td>
                                            <td>{{$mediaCursos[3][2][7]}}</td>
                                            <td>{{$mediaCursos[3][2][8]}}</td>
                                            <td>{{$mediaCursos[3][2][9]}}</td>
                                            <td>{{$mediaCursos[3][2][10]}}</td>
                                            <td>{{$mediaCursos[3][2][11]}}</td>
                                            <td>{{$mediaCursos[3][2][12]}}</td>
                                        </tr>
                                <tbody>
                            </table>
                        </div>
                        @endif
                        @if(!$notasCursos[3]->isEmpty())
                        <div class="tab-pane fade" id="EC" role="tabpanel" aria-labelledby="EC-tab">
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
                                    @foreach($notasCursos[3] as $key => $ava)
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
                                            <td>{{$mediaCursos[0][3][0]}}</td>
                                            <td>{{$mediaCursos[0][3][1]}}</td>
                                            <td>{{$mediaCursos[0][3][2]}}</td>
                                            <td>{{$mediaCursos[0][3][3]}}</td>
                                            <td>{{$mediaCursos[0][3][4]}}</td>
                                            <td>{{$mediaCursos[0][3][5]}}</td>
                                            <td>{{$mediaCursos[0][3][6]}}</td>
                                            <td>{{$mediaCursos[0][3][7]}}</td>
                                            <td>{{$mediaCursos[0][3][8]}}</td>
                                            <td>{{$mediaCursos[0][3][9]}}</td>
                                            <td>{{$mediaCursos[0][3][10]}}</td>
                                            <td>{{$mediaCursos[0][3][11]}}</td>
                                            <td>{{$mediaCursos[0][3][12]}}</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Média</td>
                                            <td>Com Outlier D2%</td>
                                            <td>{{$mediaCursos[1][3][0]}}</td>
                                            <td>{{$mediaCursos[1][3][1]}}</td>
                                            <td>{{$mediaCursos[1][3][2]}}</td>
                                            <td>{{$mediaCursos[1][3][3]}}</td>
                                            <td>{{$mediaCursos[1][3][4]}}</td>
                                            <td>{{$mediaCursos[1][3][5]}}</td>
                                            <td>{{$mediaCursos[1][3][6]}}</td>
                                            <td>{{$mediaCursos[1][3][7]}}</td>
                                            <td>{{$mediaCursos[1][3][8]}}</td>
                                            <td>{{$mediaCursos[1][3][9]}}</td>
                                            <td>{{$mediaCursos[1][3][10]}}</td>
                                            <td>{{$mediaCursos[1][3][11]}}</td>
                                            <td>{{$mediaCursos[1][3][12]}}</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td>Média</td>
                                            <td>Sem Outlier D2</td>
                                            <td>{{$mediaCursos[2][3][0]}}</td>
                                            <td>{{$mediaCursos[2][3][1]}}</td>
                                            <td>{{$mediaCursos[2][3][2]}}</td>
                                            <td>{{$mediaCursos[2][3][3]}}</td>
                                            <td>{{$mediaCursos[2][3][4]}}</td>
                                            <td>{{$mediaCursos[2][3][5]}}</td>
                                            <td>{{$mediaCursos[2][3][6]}}</td>
                                            <td>{{$mediaCursos[2][3][7]}}</td>
                                            <td>{{$mediaCursos[2][3][8]}}</td>
                                            <td>{{$mediaCursos[2][3][9]}}</td>
                                            <td>{{$mediaCursos[2][3][10]}}</td>
                                            <td>{{$mediaCursos[2][3][11]}}</td>
                                            <td>{{$mediaCursos[2][3][12]}}</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Média</td>
                                            <td>Sem Outlier D2%</td>
                                            <td>{{$mediaCursos[3][3][0]}}</td>
                                            <td>{{$mediaCursos[3][3][1]}}</td>
                                            <td>{{$mediaCursos[3][3][2]}}</td>
                                            <td>{{$mediaCursos[3][3][3]}}</td>
                                            <td>{{$mediaCursos[3][3][4]}}</td>
                                            <td>{{$mediaCursos[3][3][5]}}</td>
                                            <td>{{$mediaCursos[3][3][6]}}</td>
                                            <td>{{$mediaCursos[3][3][7]}}</td>
                                            <td>{{$mediaCursos[3][3][8]}}</td>
                                            <td>{{$mediaCursos[3][3][9]}}</td>
                                            <td>{{$mediaCursos[3][3][10]}}</td>
                                            <td>{{$mediaCursos[3][3][11]}}</td>
                                            <td>{{$mediaCursos[3][3][12]}}</td>
                                        </tr>
                                <tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

var graficoCCD = <?php echo $graficoCCD; ?>;

google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
    
    var data = google.visualization.arrayToDataTable(graficoCCD);
    /*
      var data = google.visualization.arrayToDataTable([
        ['City', '2010 Population',],
        ['New York City, NY', 8175000],
        ['Los Angeles, CA', 3792000],
        ['Chicago, IL', 2695000],
        ['Houston, TX', 2099000],
        ['Philadelphia, PA', 1526000]
      ]);
*/
      var options = {
        title: 'Resultado da avaliação discente',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Média',
          minValue: 0
        },
        vAxis: {
          title: 'Pergunta'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>
