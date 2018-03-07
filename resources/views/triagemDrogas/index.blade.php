@extends('templates/principal')
@section('titulo','Lista de Drugs')
@section('conteudo')

    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div class="grey-text center-align">
                        <h4>Lista de drogas</h4>
                    </div>
                    <table class="striped bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td>

                                    <a class="waves-effect waves-light"
                                       href="triagemDrogas/alterar/{{$dado['id_drogas']}}"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <a href="triagemDrogas/deletar/{{$dado['id_drogas']}}"><i
                                                class="material-icons left red-text"
                                                onclick="return confirm('Tem certeza que deseja deletar?')">delete</i></a>
                                </td>
                                <td>{{$dado['tx_nome']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="right-align">
                    <a class="btn-floating btn-large waves-effect waves-light" href="{{route('triagemDrogas.form')}}"><i
                                class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function EventAlert() {
            swal({
                    title: "Tem Certeza?", // Padrão
                    text: "Não podera recuperar esse arquivo novamente!",
                    type: "warning", // Padrão
                    showCancelButton: true,
                    confirmButtonColor: "#0c4", // Padrão
                    confirmButtonText: "Sim", // Padrão
                    cancelButtonColor: "#b11", // Padrão
                    cancelButtonText: "Não", // Padrão
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        swal("Deletado!", "Supervisor deletado.", "success");
                    } else {
                        swal("Cancelled", "Cancelado :)", "error");
                    }
                });
        }
    </script>
@endsection