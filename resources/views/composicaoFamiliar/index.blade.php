@extends('templates/principal')
@section('titulo','Composição')

@section('conteudo')

    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div class="grey-text center-align">
                        <h4>Composição familiar</h4>
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
                                       href="composicaoFamiliar/alterar/{{$dado['id_composicao_familiar']}}"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <a href="composicaoFamiliar/deletar/{{$dado['id_composicao_familiar']}}"><i
                                                class="material-icons left red-text"
                                                onclick="return confirm('Tem certeza que deseja deletar?')">delete</i></a>
                                </td>
                                <td>{{$dado['tx_composicao']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="right-align">
                    <a class="btn-floating btn-large waves-effect waves-light"
                       href="{{route('composicaoFamiliar.form')}}"><i
                                class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function EventAlert() {
            swal({
                    title: "Tem Certeza?",
                    text: "Não poderá recuperar esse arquivo novamente!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#0c3", // padronizada rs, depois pôr comentario
                    confirmButtonText: "Sim, apagar!",
                    cancelButtonColor: "#b11",  // padronizada rs, depois pôr comentario
                    cancelButtonText: "Não, cancele por favor!",  // wtf ? kkkk
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