@extends('layouts.app')
<style>

.tab-content > .tab-pane,
.pill-content > .pill-pane {
display: block !important;          
height: 0 !important;     
overflow-y: hidden !important;              
}
.tab-content > .active,
.pill-content > .active {
height: auto !important; 
} 

.card-body > .table {
display: block !important;            
overflow-y: hidden !important;              
}

/*
    // bootstrap hack: fix content width inside hidden tabs 
.tab-content > .tab-pane:not(.active),
.pill-content > .pill-pane:not(.active) {
    display: block !important;
    height: 0 !important;
    overflow-y: hidden !important;
} 
*/

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                    <div>
                        <div id="scatterchart"></div>
                    </div>
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
                            @if($notasCursos[0]->isEmpty())
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="CC-N-tab" data-toggle="tab" href="#CC-N" role="tab" aria-controls="CC-N" aria-selected="true">CC-N</a>
                            </li>
                            @else
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="CC-N-tab" data-toggle="tab" href="#CC-N" role="tab" aria-controls="CC-N" aria-selected="false">CC-N</a>
                            </li>
                            @endif
                        @endif
                        @if(!$notasCursos[2]->isEmpty())
                            @if($notasCursos[0]->isEmpty() && $notasCursos[1]->isEmpty())
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="SI-tab" data-toggle="tab" href="#SI" role="tab" aria-controls="SI" aria-selected="true">SI  </a>
                            </li>
                            @else
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="SI-tab" data-toggle="tab" href="#SI" role="tab" aria-controls="SI" aria-selected="false">SI  </a>
                            </li>
                            @endif
                        @endif
                        @if(!$notasCursos[3]->isEmpty())
                            @if($notasCursos[0]->isEmpty() && $notasCursos[1]->isEmpty() && $notasCursos[1]->isEmpty())
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="EC-tab" data-toggle="tab" href="#EC" role="tab" aria-controls="EC" aria-selected="true">EC  </a>
                            </li>
                            @else
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="EC-tab" data-toggle="tab" href="#EC" role="tab" aria-controls="EC" aria-selected="false">EC  </a>
                            </li>
                            @endif
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
                                <div id="chart_div"></div>
                            </div>
                        </div>
                        @endif
                        @if(!$notasCursos[1]->isEmpty())
                            @if($notasCursos[0]->isEmpty())
                            <div class="tab-pane fade show active" id="CC-N" role="tabpanel" aria-labelledby="CC-N-tab">
                            @else
                            <div class="tab-pane fade" id="CC-N" role="tabpanel" aria-labelledby="CC-N-tab">
                            @endif
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
                                <div>
                                    <div id="chart_div_CC-N"></div>
                                </div>
                            </div>
                        @endif
                        @if(!$notasCursos[2]->isEmpty())
                            @if($notasCursos[0]->isEmpty() && $notasCursos[1]->isEmpty())
                            <div class="tab-pane fade show active" id="SI" role="tabpanel" aria-labelledby="SI-tab">
                            @else
                            <div class="tab-pane fade" id="SI" role="tabpanel" aria-labelledby="SI-tab">
                            @endif
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
                                <div>
                                    <div id="chart_div_SI"></div>
                                </div>
                            </div>

                        @endif
                        @if(!$notasCursos[3]->isEmpty())
                            @if($notasCursos[0]->isEmpty() && $notasCursos[1]->isEmpty() && $notasCursos[1]->isEmpty())
                            <div class="tab-pane fade show active" id="EC" role="tabpanel" aria-labelledby="EC-tab">
                            @else
                            <div class="tab-pane fade" id="EC" role="tabpanel" aria-labelledby="EC-tab">
                            @endif
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
                                <div>
                                    <div id="chart_div_EC"></div>
                                </div>
                            </div>
                        <br>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

</script>

<script>
    
    var graficoDispersao = <?php  
    echo $graficoDispersao; ?>;

    var graficoCurso = <?php 
    
    echo json_encode($data[0]); ?>;

    //console.log(graficoCurso);

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawStuff);
    google.charts.setOnLoadCallback(drawCCD);
    google.charts.setOnLoadCallback(drawCCN);
    google.charts.setOnLoadCallback(drawSI);
    google.charts.setOnLoadCallback(drawEC);
    
    function drawStuff() {

        var chartDiv = document.getElementById('scatterchart');

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pergunta');
        let x = graficoDispersao[0];

        for(let i=1;i<graficoDispersao[0].length;i++){
            data.addColumn('number', 'D'+i);

        }
        data.addRows(graficoDispersao);

        var materialOptions = {
            title: 'Motivation and Energy Level Throughout the Day',
        isStacked: true,
        height:600,
        chartArea: {
            height:300,
          top:100,
        },
        hAxis: {
          title: 'Departamentos',
          titleTextStyle: {
            color: '#FF0000',            
          },

          slantedText:true,
          slantedTextAngle:90,

        },
        vAxis: {
          title: 'Kits'
        }
        };

        var classicOptions = {
            title: 'Gráfico de dispersão das notas atribuídas por discente para cada critério avaliativo',

            isStacked: true,
            height:900,
            chartArea: {
                height:400,
                top:100,
            },
            hAxis: {
            title: 'Perguntas',
            titleTextStyle: {
                color: '#FF0000',            
            },

            slantedText:true,
            slantedTextAngle:90,

            },
            
            vAxis: {
            title: 'Notas', minValue: 1, maxValue: 5
            }
            };

        function drawMaterialChart() {
          var materialChart = new google.charts.Scatter(chartDiv);
          materialChart.draw(data, google.charts.Scatter.convertOptions(materialOptions));
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ScatterChart(chartDiv);
          classicChart.draw(data, classicOptions);
        }

        drawClassicChart();
    }
    
    function drawCCD(){
        var data = google.visualization.arrayToDataTable(graficoCurso[0]);
        //console.log(data);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" }]);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {width: '20%',          
                height:800,
                top:100
            },
            bar: {groupWidth: "75%"},
            legend: { position: "none" },
            hAxis: {
                title: 'Média',
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                    }
            },
            width: 1200,
            height: 1200,

        };

        if(graficoCurso[0].length>1){
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(view, options);
            //document.getElementById( 'chart_div_CC-N' ).style.display = 'none';
            //document.getElementById( 'chart_div_SI' ).style.display = 'none';
            //document.getElementById( 'chart_div_EC' ).style.display = 'none';
        }
    }

    function drawCCN(){
        
        var data = google.visualization.arrayToDataTable(graficoCurso[1]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" }]);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {width: '20%',          
                height:800,
                top:100
            },
            bar: {groupWidth: "75%"},
            legend: { position: "none" },
            hAxis: {
                title: 'Média',
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                    }
            },
            width: 1200,
            height: 1200,

        };

        if(graficoCurso[1].length>1){
            var chart = new google.visualization.BarChart(document.getElementById('chart_div_CC-N'));

            chart.draw(view, options);
        }
    }

    function drawSI(){
        
        var data = google.visualization.arrayToDataTable(graficoCurso[2]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" }]);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {width: '20%',          
                height:800,
                top:100
            },
            bar: {groupWidth: "75%"},
            legend: { position: "none" },
            hAxis: {
                title: 'Média',
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                    }
            },
            width: 1200,
            height: 1200,

        };

        if(graficoCurso[2].length>1){
            var chart = new google.visualization.BarChart(document.getElementById('chart_div_SI'));

            chart.draw(view, options);
        }
    }

    function drawEC(){
        
        var data = google.visualization.arrayToDataTable(graficoCurso[3]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" }]);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {width: '20%',          
                height:800,
                top:100
            },
            bar: {groupWidth: "75%"},
            legend: { position: "none" },
            hAxis: {
                title: 'Média',
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                    }
            },
            width: 1200,
            height: 1200,

        };

        if(graficoCurso[1].length>1){
            var chart = new google.visualization.BarChart(document.getElementById('chart_div_EC'));

            chart.draw(view, options);
        }
    }


</script>

<script type="text/javascript">

jQuery(document).ready(function($) {
    $("#CC-D-tab").click(function() {
        $("#chart_div").show();
        $("#chart_div_CC-N").hide();
        $("#chart_div_SI").hide();
        $("#chart_div_EC").hide();

    });
    $("#CC-N-tab").click(function() {
        $("#chart_div").hide();
        $("#chart_div_CC-N").show();
        $("#chart_div_SI").hide();
        $("#chart_div_EC").hide();

    });
    $("#SI-tab").click(function() {
        $("#chart_div").hide();
        $("#chart_div_CC-N").hide();
        $("#chart_div_SI").show();
        $("#chart_div_EC").hide();

    });
    $("#EC-tab").click(function() {
        $("#chart_div").hide();
        $("#chart_div_CC-N").hide();
        $("#chart_div_SI").hide();
        $("#chart_div_EC").show();
    });
});

</script>