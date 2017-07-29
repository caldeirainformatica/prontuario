@extends('templates/principal')
@section('conteudo')


    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div>
                        <div class="panel-heading" align="center">
                            <h4 class="grey-text">Lista de pacientes</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Ações</th>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>responsavel</th>
                                    <th>data de nascimento</th>
                                    <th>Endereço</th>
                                    <th>Número</th>
                                    <th>UF</th>
                                    <th>Bairro</th>
                                    <th>Cidade</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    {{--<th>Orgão expeditor</th>--}}
                                    {{--<th>Naturalidade</th>--}}
                                    {{--<th>UF naturalidade</th>--}}
                                    {{--<th>Telefone</th>--}}
                                    {{--<th>Telefone 2</th>--}}
                                    {{--<th>Estado civil</th>--}}
                                    {{--<th>Sexo</th>--}}
                                    {{--<th>Raça</th>--}}
                                    {{--<th>Tipo de atendimento</th>--}}
                                    {{--<th>Orientação sexual</th>--}}
                                    {{--<th>Entrada do encaminhamento</th>--}}
                                    {{--<th>Saida do encaminhamento</th>--}}
                                    {{--<th>Aluno</th>--}}
                                    {{--<th>Supervisor</th>--}}
                                    {{--<th>Criado</th>--}}
                                    {{--<th>Alterado</th>--}}
                                </tr>
                                @foreach($dados as $dado)

                                    <tr>
                                        <td><a class="waves-effect waves-light" href="paciente/alterar/{{$dado['id_paciente']}}"><i
                                                        class="material-icons left">mode_edit</i></a>

                                            <a href="paciente/deletar/{{$dado['id_paciente']}}"><i
                                                        class="material-icons left red-text" onclick="return confirm('Tem certeza que deseja deletar?')">delete</i></a>

                                        </td>
                                        <td>{{$dado['id_paciente']}}</td>
                                        <td>{{$dado['tx_nome']}}</td>
                                        <td>{{ $dado['tx_nome_responsavel']}}</td>
                                        <td>{{ $dado['dt_nascimento']}}</td>
                                        <td>{{ $dado['tx_endereco']}}</td>
                                        <td>{{ $dado['nu_numero']}}</td>
                                        <td>{{ $dado['tx_uf']}}</td>
                                        <td>{{ $dado['tx_bairro']}}</td>
                                        <td>{{ $dado['tx_cidade']}}</td>
                                        <td>{{ $dado['nu_cpf']}}</td>
                                        <td>{{ $dado['nu_rg']}}</td>
                                        {{--<td>{{ $dado['tx_orgao_expe']}}</td>--}}
                                        {{--<td>{{ $dado['tx_naturalidade']}}</td>--}}
                                        {{--<td>{{ $dado['tx_uf_naturalidade']}}</td>--}}
                                        {{--<td>{{ $dado['nu_fone']}}</td>--}}
                                        {{--<td>{{ $dado['nu_fone1']}}</td>--}}
                                        {{--<td>{{ $dado['tx_estado_civil']}}</td>--}}
                                        {{--<td>{{ $dado['tx_sexo']}}</td>--}}
                                        {{--<td>{{ $dado['tx_raca']}}</td>--}}
                                        {{--<td>{{ $dado['tp_atendimento']}}</td>--}}
                                        {{--<td>{{ $dado['tp_orientacao_sexual']}}</td>--}}
                                        {{--<td>{{ $dado['tp_entrada_encam']}}</td>--}}
                                        {{--<td>{{ $dado['tp_saida_encam']}}</td>--}}
                                        {{--<td>{{ $dado['fk_aluno']}}</td>--}}
                                        {{--<td>{{ $dado['fk_supervisor']}}</td>--}}
                                        {{--<td>{{ $dado['created_at']}}</td>--}}
                                        {{--<td>{{ $dado['updated_at']}}</td>--}}

                                    </tr>
                                @endforeach;

                            </table>
                        </div>
                        <div class="right-align">
                            <a class="btn-floating btn-large waves-effect waves-light"
                               href="{{route('paciente.form')}}"><i
                                        class="material-icons">add</i></a>
                        </div>
                        <div class="panel-footer">
                            <h6>Produzido por Fábrica de Softwares Jr.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function EventAlert(){
    swal({
    title: "Deseja deletar?",
    text: "Não podera recuperar esse arquivo novamente!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sim, apagar!",
    cancelButtonText: "Não, cancele por favor!",
    closeOnConfirm: false,
    closeOnCancel: false
    },
    function(isConfirm){
    if (isConfirm) {
    swal("Deletado!", "Supervisor deletado.", "success");
    } else {
    swal("Cancelled", "Cancelado :)", "error");
    }
    });
    }
    </script>
@endsection