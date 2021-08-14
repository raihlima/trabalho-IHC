@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    tr[data-href]{
        cursor: pointer;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de disciplinas') }}</div>
                    <div class="card-body">
                    <p>Digite o código da disciplina ou o nome na busca</p>  
                    <input class="form-control" id="myInput" type="text" placeholder="Busca..."> <br>

                        <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <td>Código</td>
                                        <td>Nome</td>
                                    </tr>
                                </thead>
                                <tbody id="listaDisciplina">
                                    @foreach($lista as $list)
                                    
                                    <tr class='clickable-row' data-href='{{route ("chefe_departamento.lista_professores")}}'>
                                        <td>{{$list->codigo}}</td>
                                        <td>{{$list->nome}}</td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#listaDisciplina tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
