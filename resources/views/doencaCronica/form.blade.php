@extends('templates/principal')
@section('titulo', 'Doença Crônica')

@section('conteudo')
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div class="grey-text center-align">
                        <h4>Doença Crônica</h4>
                    </div>
                    <form method="post" action={{route('doencaCronica.salvar')}}>
                        <div class="input-field col s6">
                            <select name="fk_triagem">
                                @foreach($dados as $dado)
                                    <option value="{{$dado['id_triagem']}}">{{$dado['tx_nome']}}</option>
                                @endforeach
                            </select>
                            <label for="tx_nome">Triagem</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="fk_doenca">
                                @foreach($dados2 as $dado)
                                    <option value="{{$dado['id_doenca']}}">{{$dado['tx_nome']}}</option>
                                @endforeach
                            </select>
                            <label for="tx_nome">Doença</label>
                        </div>
                        <input type="submit" value="Salvar" id="salvar" name="salvar" onclick="EventAlert()"
                               class="btn btn-success">
                        <a href="{{route('doencaCronica.index')}}" class="btn red">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function EventAlert() {
            swal("Cadastro efetuado com sucesso!", "success")
            //falta complementar o sweet alert
        }

        $(document).ready(function () {
            $('select').material_select();
        });

    </script>
@endsection
