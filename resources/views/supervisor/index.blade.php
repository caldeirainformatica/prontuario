@extends('templates/principal')
@section('titulo', 'Listagem de Supervisores')
@section('conteudo')

    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div>
                        <h4 class="grey-text" align="center">Lista de Supervisores</h4>
                    </div>
                    <table class="striped bordered">
                        <thead>
                        <tr>
                            <th>Ação</th>
                            <th>CRP</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td>

                                    <a class="waves-effect waves-light"
                                       href="supervisor/alterar/{{$dado['id_supervisor']}}"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <!-- Para funcionar o Sweet Alert-->
                                    <a href="#" onclick="deletar({{$dado['id_supervisor']}})"><i
                                                class="material-icons left red-text">delete</i></a>
                                <td>{{$dado['nu_crp']}}</td>
                                <td>{{$dado['tx_nome']}}</td>
                                <td>{{$dado['nu_fone']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="right-align">
                    <a class="btn-floating btn-large waves-effect waves-light"
                       href="{{route('supervisor.form')}}"><i
                                class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    </div>
    <script>

        function deletar(id) {

            console.log(id);
            swal({
                title: 'Tem Certeza que deseja apagar esse Supervisor? (' + id + ")",
                text: "O Supervisor irá ser apagado!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00c853', // COR DO BOTÃO DE CONFIRMAR
                confirmButtonText: 'Sim',
                cancelButtonColor: '#b71c1c',  // COR DO BOTÃO DE CANCELAR
                cancelButtonText: 'Não'
            }).then(function (result) {
                if (result.value) {
                    window.open('/supervisor/deletar/' + id, '_self');
                    swal(
                        'Deletado!',
                        'Apagado com sucesso !',
                        'success'
                    )
                } else if (result.dismiss === 'cancel') {
                    swal(
                        'Operação Cancelada',
                        'Cadastro salvo com sucesso',
                        'error'
                    )
                }
            })
        }
    </script>

    <!--
               s function EventAlert(mensagem, id) {
          swal({
        title: mensagem,
        text: "Não podera recuperar o registro numero" + id,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, apagar!",
        cancelButtonText: "Não, cancele por favor!",
        closeOnConfirm: false,
        closeOnCancel: false,
        }).then(function () {
        swal("Deletado!", "Supervisor deletado.", "success" + id);
        }, function () {
        swal("Cancelled", "Cancelado :)", "error" + id);

        });

        swal({
        title: mensagem,
        text: "Não podera recuperar o registro numero" + id,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, apagar!",
        cancelButtonText: "Não, cancele por favor!",
        closeOnConfirm: false,
        closeOnCancel: true
        },
        function (isConfirm) {
        if (isConfirm) {


        $.get('/supervisor/deletar/' + id, function (data) {
        console.log(data.data)
        swal("Deletado!", "Supervisor " + id + " deletado.", "success");
        })

        }
        });
        }
        </script>  -->
@endsection