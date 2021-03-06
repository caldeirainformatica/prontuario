@extends('templates/principal')
@section('titulo', 'Gasto Saúde')
@section('conteudo')
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div class="grey-text center-align">
                        <h4>Gasto com saude</h4>
                    </div>
                    <form method="post" action={{route('gasto.salvar')}}>
                    {{ csrf_field() }}
                    <!--  TOKEN LARAVEL -->
                        <div class="row">
                            <div id="oculto">
                                <input type="number" name="id_supervisor" id="id_supervisor"
                                       value="{{$dados['id_gasto_saude'] or null}}" hidden>
                            </div>
                            <div class="input-field col s12">
                                <input id="tx_nome" name="tx_nome" type="text" class="validate" required
                                       value="{{$dados['tx_nome'] or null}}">
                                <label for="tx_nome">Gasto</label>
                            </div>
                            <input type="submit" value="Salvar" id="salvar" name="salvar" onclick="EventAlert()"
                                   class="btn btn-success">
                            <a href="{{route('gasto.index')}}" class="btn red">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
