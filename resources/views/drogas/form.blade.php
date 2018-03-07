@extends('templates/principal')
@section('titulo','Drogas')
@section('conteudo')
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div class="grey-text center-align">
                        <h4>Drogas</h4>
                    </div>
                    <form method="post" action={{route('drogas.salvar')}}>
                        <div id="oculto">
                            <input type="number" name="id_supervisor" id="id_supervisor"
                                   value="{{$dados['id_drogas'] or null}}" hidden>
                        </div>
                        <div class="input-field col s10">
                            <input type="text" id="tx_drogas" name="tx_drogas" value="{{$dados['tx_drogas'] or null}}">
                            <label for="tx_drogas">Nome</label>
                        </div>
                        <input type="submit" value="Salvar" id="salvar" align="center" name="salvar" onclick=""
                               class="btn btn-success">
                        <a href="{{route('drogas.index')}}" class="btn red">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection