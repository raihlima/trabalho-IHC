@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div id="menu" style="position: fixed">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Gráfico de Médias com Outlier</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Gráfico de Médias de Porcentagem com Outlier</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Gráfico de Médias sem Outlier</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Gráfico de Médias de Porcentagem sem Outlier</a>
                </div>
            </div>
        </div>
        <div class="col-md-8" id="list-item-1">
            <div class="card">
                <div class="card-header">{{ __('Disciplina') }}</div>

                <div class="card-body">
                    Código: {{$disciplina[0]->codigo}}
                    <br> Nome: {{$disciplina[0]->nome}}
                </div>
            </div>
            <br>
            <div class="card" id="list-item-2">
                <div class="card-header">{{ __('Gráfico de Médias com Outlier') }}</div>
                <div class="card-body">
                    <div id="chart_div"></div>
                </div>
            </div>
            <br>
            <div class="card" id="list-item-3">
                <div class="card-header">{{ __('Gráfico de Médias de Porcentagem com Outlier') }}</div>
                <div class="card-body">
                    <div id="chart_div2"></div>
                </div>
            </div>
            <br>
            <div class="card" id="list-item-4">
                <div class="card-header">{{ __('Gráfico de Médias sem Outlier') }}</div>
                <div class="card-body">
                    <div id="chart_div3"></div>

                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Gráfico de Médias de Porcentagem sem Outlier') }}</div>
                <div class="card-body">
                    <div id="chart_div4"></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    google.charts.load('current', {
        packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback(drawBarColors);
    google.charts.setOnLoadCallback(drawBarColorsPor);
    google.charts.setOnLoadCallback(drawBarColorsSemOut);
    google.charts.setOnLoadCallback(drawBarColorsSemOutPor);

    var dados = <?php
                echo json_encode($resultado); ?>;

    function drawBarColors() {
        var data = google.visualization.arrayToDataTable(dados[0]);
        console.log(dados[0][1]);

        var view = new google.visualization.DataView(data);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {
                width: '40%',
                top: 100
            },
            bar: {
                groupWidth: "75%"
            },
            //legend: { position: "none" },
            hAxis: {
                title: 'Média',
                minValue: 0,
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                }
            },
            width: 900,
            height: 2000,

        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }

    function drawBarColorsPor() {
        var data = google.visualization.arrayToDataTable(dados[1]);
        //console.log(dados[0][1]);

        var view = new google.visualization.DataView(data);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {
                width: '40%',
                top: 100
            },
            bar: {
                groupWidth: "75%"
            },
            //legend: { position: "none" },
            hAxis: {
                title: 'Média',
                minValue: 0,
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                }
            },
            width: 900,
            height: 2000,

        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
    }

    function drawBarColorsSemOut() {
        var data = google.visualization.arrayToDataTable(dados[0]);
        console.log(dados[0][1]);

        var view = new google.visualization.DataView(data);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {
                width: '40%',
                top: 100
            },
            bar: {
                groupWidth: "75%"
            },
            //legend: { position: "none" },
            hAxis: {
                title: 'Média',
                minValue: 0,
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                }
            },
            width: 900,
            height: 2000,

        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
    }

    function drawBarColorsSemOutPor() {
        var data = google.visualization.arrayToDataTable(dados[3]);
        console.log(dados[0][1]);

        var view = new google.visualization.DataView(data);

        var options = {
            title: 'Resultado da avaliação discente',
            chartArea: {
                width: '40%',
                top: 100
            },
            bar: {
                groupWidth: "75%"
            },
            //legend: { position: "none" },
            hAxis: {
                title: 'Média',
                minValue: 0,
                maxValue: 5,
            },
            vAxis: {
                textStyle: {
                    fontSize: 14
                }
            },
            width: 900,
            height: 2000,

        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));
        chart.draw(data, options);
    }
</script>