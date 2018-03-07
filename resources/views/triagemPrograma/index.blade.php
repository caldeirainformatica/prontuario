@extends('templates/principal')
@section('titulos','Triagem Programas')
@section('conteudo')

    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div class="grey-text center-align">
                        <h4>Triagem Programas</h4>
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
                                       href="triagemPrograma/alterar/{{$dado['fk_programa_social']}}"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <a href="triagemPrograma/deletar/{{$dado['fk_programa_social']}}"><i
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
                    <a class="btn-floating btn-large waves-effect waves-light"
                       href="{{route('triagemPatrimonio.form')}}"><i
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
                    confirmButtonColor: "#0c3", // Padrão
                    confirmButtonText: "Sim, apagar!", // Padrão
                    cancelButtonColor: "#b11", // Padrão
                    cancelButtonText: "Não, cancele por favor!", // Padrão
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