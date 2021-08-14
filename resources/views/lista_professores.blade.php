@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de professores') }}</div>
                  <div class="card-body"> 
                  <p>Busca:<input class="form-control" id="myInput" type="text" placeholder="Digite o nome do professor">
                  </p> <br>

                    <div class="list-group">
                      <div id="listaProfessores">
                            @foreach($lista as $list)
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                
                                {{$list->name}} <br> 
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
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#listaProfessores *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
