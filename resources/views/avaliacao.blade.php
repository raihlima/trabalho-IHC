@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <form method="POST" action="{{route ("estudante.realizar_avaliacao")}}">
            {{csrf_field()}}
                <div class="card">
                        <div class="card-header">{{ __('Informação sobre a avaliação') }}</div>
                        <div class="card-body">
                        
                            Esta é uma avaliação sobre: <br>
                            Disciplina: {{$turma[0]->codigo_disciplina}} {{$turma[0]->nome_disciplina}}<br>
                            Professor: {{$turma[0]->nome_professor}}<br>
                            Turma: {{$turma[0]->codigo_turma}}<br>
                        
                        </div>
                </div>
                <br>
                <div class="card">
                        <div class="card-header">{{ __('Avaliação sobre o professor') }}</div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <td>Pergunta</td>
                                        <td>Sim</td>
                                        <td>Não</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>O professor disponibilizou o plano de curso da disciplina na primeira semana de aula?</td>
                                        <td><input type="radio" value="5" name="p1" required></td>
                                        <td><input type="radio" value="1" name="p1"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Dê uma nota nas seguintes perguntas: 1(Nunca), 2(Raramente), 3(Às vezes), 4(Quase sempre), 5(Sempre)</p>
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <td>Pergunta</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>O professor é pontual?</td>
                                        <span class="align-middle">
                                        <td><input type="radio" value="1" name="p2" required></td>
                                        <td><input type="radio" value="2" name="p2"></td>
                                        <td><input type="radio" value="3" name="p2"></td>
                                        <td><input type="radio" value="4" name="p2"></td>
                                        <td><input type="radio" value="5" name="p2"></td>
                                        </span>
                                    </tr>
                                    <tr>
                                        <td>O professor é assíduo às aulas?</td>
                                        <td><input type="radio" value="1" name="p3" required></td>
                                        <td><input type="radio" value="2" name="p3"></td>
                                        <td><input type="radio" value="3" name="p3"></td>
                                        <td><input type="radio" value="4" name="p3"></td>
                                        <td><input type="radio" value="5" name="p3"></td>
                                    </tr>
                                    <tr>
                                        <td>O professor usa todo o tempo de aula?</td>
                                        <td><input type="radio" value="1" name="p4" required></td>
                                        <td><input type="radio" value="2" name="p4"></td>
                                        <td><input type="radio" value="3" name="p4"></td>
                                        <td><input type="radio" value="4" name="p4"></td>
                                        <td><input type="radio" value="5" name="p4"></td>
                                    </tr>
                                    <tr>
                                        <td>O professor está disponível no horário de atendimento?</td>
                                        <td><input type="radio" value="1" name="p5" required></td>
                                        <td><input type="radio" value="2" name="p5"></td>
                                        <td><input type="radio" value="3" name="p5"></td>
                                        <td><input type="radio" value="4" name="p5"></td>
                                        <td><input type="radio" value="5" name="p5"></td>
                                    </tr>
                                    <tr>
                                        <td>O professor tira dúvidas em sala de aula?</td>
                                        <td><input type="radio" value="1" name="p6" required></td>
                                        <td><input type="radio" value="2" name="p6"></td>
                                        <td><input type="radio" value="3" name="p6"></td>
                                        <td><input type="radio" value="4" name="p6"></td>
                                        <td><input type="radio" value="5" name="p6"></td>
                                    </tr>
                                    <tr>
                                        <td>O professor apresenta os conteúdos da disciplina de forma clara?</td>
                                        <td><input type="radio" value="1" name="p7" required></td>
                                        <td><input type="radio" value="2" name="p7"></td>
                                        <td><input type="radio" value="3" name="p7"></td>
                                        <td><input type="radio" value="4" name="p7"></td>
                                        <td><input type="radio" value="5" name="p7"></td>
                                    </tr>
                                    <tr>
                                        <td>O professor demonstra dominar o conteúdo da disciplina?</td>
                                        <td><input type="radio" value="1" name="p8" required></td>
                                        <td><input type="radio" value="2" name="p8"></td>
                                        <td><input type="radio" value="3" name="p8"></td>
                                        <td><input type="radio" value="4" name="p8"></td>
                                        <td><input type="radio" value="5" name="p8"></td>
                                    </tr>
                                    <tr>
                                        <td>O material utilizado em aula é atualizado?</td>
                                        <td><input type="radio" value="1" name="p9" required></td>
                                        <td><input type="radio" value="2" name="p9"></td>
                                        <td><input type="radio" value="3" name="p9"></td>
                                        <td><input type="radio" value="4" name="p9"></td>
                                        <td><input type="radio" value="5" name="p9"></td>
                                    </tr>
                                    <tr>
                                        <td>O professor apresenta exemplos em aula e faz ou propõe exercícios e/ou trabalhos práticos?</td>
                                        <td><input type="radio" value="1" name="p10" required></td>
                                        <td><input type="radio" value="2" name="p10"></td>
                                        <td><input type="radio" value="3" name="p10"></td>
                                        <td><input type="radio" value="4" name="p10"></td>
                                        <td><input type="radio" value="5" name="p10"></td>
                                    </tr>
                                    <tr>
                                        <td>As avaliações refletem o conteúdo apresentado em sala?</td>
                                        <td><input type="radio" value="1" name="p11" required></td>
                                        <td><input type="radio" value="2" name="p11"></td>
                                        <td><input type="radio" value="3" name="p11"></td>
                                        <td><input type="radio" value="4" name="p11"></td>
                                        <td><input type="radio" value="5" name="p11"></td>
                                    </tr>
                                    <tr>
                                        <td>As notas das avaliações foram publicadas até três dias antes da avaliação seguinte?</td>
                                        <td><input type="radio" value="1" name="p12" required></td>
                                        <td><input type="radio" value="2" name="p12"></td>
                                        <td><input type="radio" value="3" name="p12"></td>
                                        <td><input type="radio" value="4" name="p12"></td>
                                        <td><input type="radio" value="5" name="p12"></td>
                                    </tr>
                                    <tr>
                                        <td>O conteúdo programático da disciplina foi cumprido?</td>
                                        <td><input type="radio" value="1" name="p13" required></td>
                                        <td><input type="radio" value="2" name="p13"></td>
                                        <td><input type="radio" value="3" name="p13"></td>
                                        <td><input type="radio" value="4" name="p13"></td>
                                        <td><input type="radio" value="5" name="p13"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>

                <br>
                <div class="card">
                    <div class="card-header">{{ __('Avaliação sobre você') }}
                    </div>
                    <div class="card-body">
                        <p>Dê uma nota nas seguintes perguntas: 1(Nunca), 2(Raramente), 3(Às vezes), 4(Quase sempre), 5(Sempre)</p>
                        <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <td>Pergunta</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Você acha que a bibliografia sugerida no Plano de Curso é adequada ao conteúdo da disciplina?</td>
                                        <td><input type="radio" value="1" name="a1" required></td>
                                        <td><input type="radio" value="2" name="a1"></td>
                                        <td><input type="radio" value="3" name="a1"></td>
                                        <td><input type="radio" value="4" name="a1"></td>
                                        <td><input type="radio" value="5" name="a1"></td>
                                    </tr>
                                    <tr>
                                        <td>Os objetivos da disciplina foram atendidos?</td>
                                        <span class="align-middle">
                                        <td><input type="radio" value="1" name="a2" required></td>
                                        <td><input type="radio" value="2" name="a2"></td>
                                        <td><input type="radio" value="3" name="a2"></td>
                                        <td><input type="radio" value="4" name="a2"></td>
                                        <td><input type="radio" value="5" name="a2"></td>
                                        </span>
                                    </tr>
                                    <tr>
                                        <td>Você considera a ementa da disciplina adequada ao curso?</td>
                                        <td><input type="radio" value="1" name="a3" required></td>
                                        <td><input type="radio" value="2" name="a3"></td>
                                        <td><input type="radio" value="3" name="a3"></td>
                                        <td><input type="radio" value="4" name="a3"></td>
                                        <td><input type="radio" value="5" name="a3"></td>
                                    </tr>
                                    <tr>
                                        <td>Você é pontual?</td>
                                        <td><input type="radio" value="1" name="a4" required></td>
                                        <td><input type="radio" value="2" name="a4"></td>
                                        <td><input type="radio" value="3" name="a4"></td>
                                        <td><input type="radio" value="4" name="a4"></td>
                                        <td><input type="radio" value="5" name="a4"></td>
                                    </tr>
                                    <tr>
                                        <td>Você é assíduo às aulas?</td>
                                        <td><input type="radio" value="1" name="a5" required></td>
                                        <td><input type="radio" value="2" name="a5"></td>
                                        <td><input type="radio" value="3" name="a5"></td>
                                        <td><input type="radio" value="4" name="a5"></td>
                                        <td><input type="radio" value="5" name="a5"></td>
                                    </tr>
                                    <tr>
                                        <td>Você procurou o professor, tutor ou monitor da disciplina para tirar dúvidas ao longo do semestre?</td>
                                        <td><input type="radio" value="1" name="a6" required></td>
                                        <td><input type="radio" value="2" name="a6"></td>
                                        <td><input type="radio" value="3" name="a6"></td>
                                        <td><input type="radio" value="4" name="a6"></td>
                                        <td><input type="radio" value="5" name="a6"></td>
                                    </tr>
                                    <tr>
                                        <td>Você considera que possuía a base teórica necessária para cursar esta disciplina?</td>
                                        <td><input type="radio" value="1" name="a7" required></td>
                                        <td><input type="radio" value="2" name="a7"></td>
                                        <td><input type="radio" value="3" name="a7"></td>
                                        <td><input type="radio" value="4" name="a7"></td>
                                        <td><input type="radio" value="5" name="a7"></td>
                                    </tr>
                                    <tr>
                                        <td>Você faz as atividades práticas propostas pelo professor?</td>
                                        <td><input type="radio" value="1" name="a8" required></td>
                                        <td><input type="radio" value="2" name="a8"></td>
                                        <td><input type="radio" value="3" name="a8"></td>
                                        <td><input type="radio" value="4" name="a8"></td>
                                        <td><input type="radio" value="5" name="a8"></td>
                                    </tr>
                                    <tr>
                                        <td>Você considera que se dedicou suficientemente à disciplina?</td>
                                        <td><input type="radio" value="1" name="a9" required></td>
                                        <td><input type="radio" value="2" name="a9"></td>
                                        <td><input type="radio" value="3" name="a9"></td>
                                        <td><input type="radio" value="4" name="a9"></td>
                                        <td><input type="radio" value="5" name="a9"></td>
                                    </tr>
                                    <tr>
                                        <td>Na sua opnião, suas notas refletem de modo fiel o conhecimento que você adquiriu ao longo da disciplina?</td>
                                        <td><input type="radio" value="1" name="a10" required></td>
                                        <td><input type="radio" value="2" name="a10"></td>
                                        <td><input type="radio" value="3" name="a10"></td>
                                        <td><input type="radio" value="4" name="a10"></td>
                                        <td><input type="radio" value="5" name="a10"></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <input type="hidden" name="id_turma_estudante" value="{{ $turma[0]->te_id }}">
                <input type="hidden" name="data_resposta" value="{{  Carbon\Carbon::now() }}">
                <input type="hidden" name="concluido" value="1">
                <input type="submit" value="Finalizar Avaliação" class="btn btn-primary" />

            </form>
        </div>
    </div>
</div>
@endsection