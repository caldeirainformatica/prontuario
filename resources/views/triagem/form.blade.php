@extends('templates/principal')
@section('titulo', 'Fomulário Triagem')

@section('conteudo')

    <div class="row" input fiel>
        <div class="col s12 l7">


        </div>
    </div>

    {{--<div class="row">--}}
    {{--<div class="col s10 offset-s1">--}}
    {{--<div class="card">--}}
    {{--<div class="card-content">--}}
    {{--<div align="center">--}}
    {{--<h4>Lista de triagem</h4>--}}
    {{--</div>--}}

    {{--<form method="post" action={{route('triagem.salvar')}}>--}}
    {{--{{ csrf_field() }}--}}
    {{--<div id="oculto">--}}
    {{--<input type="number" name="id_triagem" id="id_triagem"--}}
    {{--value="{{$dados['id_triagem'] or null}}"--}}
    {{--hidden>--}}
    {{--</div>--}}

    {{--<div class="input-field col s12">--}}
    {{--<b>Necessidade atendimento:</b>--}}
    {{--<p>--}}
    {{--<input type="radio" id="normal" value="{{$dados['tp_necessidade_atendimento'] or null}}"--}}
    {{--name="tp_necessidade_atendimento" class="with-gap"><label--}}
    {{--for="normal" value="N">Normal</label>--}}
    {{--<input type="radio" id="urgente"--}}
    {{--value="{{$dados['tp_necessidade_atendimento'] or null}}"--}}
    {{--name="tp_necessidade_atendimento" class="with-gap"><label--}}
    {{--for="urgente" value="U">Urgente</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<label for="tx_nome" class="active">Nome do paciente</label>--}}
    {{--<input type="text" class="form-control" value="{{$dados['tx_nome'] or null}}" name="tx_nome"--}}
    {{--id="tx_nome" required>--}}
    {{--</div>--}}

    {{--<div class="input-field col s3">--}}
    {{--<label for="tx_nome_responsavel" class="active">Responsavel</label>--}}
    {{--<input type="text" class="form-control" value="{{$dados['tx_nome_responsavel'] or null}}"--}}
    {{--id="tx_nome_responsavel"--}}
    {{--name="tx_nome_responsavel">--}}
    {{--</div>--}}

    {{--<div class="input-field col s10">--}}
    {{--<label for="activate"><b>Tipos de atendimento</b></label>--}}
    {{--<p>--}}
    {{--<input type="radio" name="tp_grupo" value="{{$dados['tp_grupo'] or null}}" id="Crianca"--}}
    {{--value="Crianca" class="with-gap">--}}
    {{--<label class="active" for="Crianca">Criança</label>--}}

    {{--<input type="radio" name="tp_grupo" value="{{$dados['tp_grupo'] or null}}"--}}
    {{--id="Adolescente"--}}
    {{--value="Adolescente" class="with-gap">--}}
    {{--<label class="active" for="Adolescente">Adolescente</label>--}}

    {{--<input type="radio" name="tp_grupo" value="{{$dados['tp_grupo'] or null}}" id="Adulto"--}}
    {{--value="Adulto" class="with-gap">--}}
    {{--<label class="active" for="Adulto">Adulto</label>--}}

    {{--<input type="radio" name="tp_grupo" value="{{$dados['tp_grupo'] or null}}" id="Idoso"--}}
    {{--value="Idoso" class="with-gap">--}}
    {{--<label class="active" for="Idoso">Idoso</label>--}}
    {{--</p>--}}
    {{--</div>--}}

    {{--<div class="input-field col s6" align="left">--}}
    {{--<label for='queixa' class="active">Queixa principal:</label>--}}
    {{--<input class="validate" value="{{$dados['tx_queixa'] or null}}" name="tx_queixa" id="queixa"--}}
    {{--required--}}
    {{--placeholder="Escreva o motivo da solicitação do atendimento utilizando ao máximo as palavras do paciente">--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<label for="tp_recusa" class="active">Recusa:</label>--}}
    {{--<input type="radio" id="caso" class="with-gap" value="C" name="tp_recusa">--}}
    {{--<label for="caso">Caso encerrado.</label>--}}
    {{--<input type="radio" id="encaminhamento" class="with-gap" value="E" name="tp_recusa">--}}
    {{--<label for="encaminhamento">Encaminhamento externo.</label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<label for="motivo" class="control-label">Motivo</label>--}}
    {{--<input type="text" id="motivo" name="tx_motivo_recusa" class="form-control">--}}
    {{--</div>--}}
    {{--<div class="input-field col s3" align="left">--}}
    {{--<label for="dtRecusa" class="active">Dt. recusa</label>--}}
    {{--<input type="date" id="dtRecusa" name="dt_recusa" class="validate">--}}
    {{--</div>--}}


    {{--<div class="row">--}}
    {{--<div class="input-field col s3" align="left">--}}
    {{--<label for="familiar" class="active">Alguem em sua residência estuda--}}
    {{--em escola ou faculdade--}}
    {{--partiular? </label>--}}
    {{--<input type="radio" id="sim" name="tp_familia" class="with-gap"><label--}}
    {{--for="sim">Sim.</label>--}}
    {{--<input type="radio" id="nao" name="tp_familia" class="with-gap"><label--}}
    {{--for="nao">Não.</label>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="input-field col s3">--}}
    {{--<input type="text" id="mensalidade" name="nu_mensalidade" required--}}
    {{--class="validate"/>--}}
    {{--<label for="mensalidade" class="active">Se sim. Qual o valor da--}}
    {{--mensalidade?</label>--}}
    {{--</div>--}}

    {{--<div class="input-field col s3">--}}
    {{--<input type="number" id="nPessoas" class="validate" required name="nu_qtd_pessoa">--}}
    {{--<label for="nPessoas" class="active">Quantas pessoas moram na sua--}}
    {{--casa?</label>--}}
    {{--</div>--}}

    {{--<div class="input-field col s3">--}}
    {{--<input type="number" id="nTrabalham" class="validate" name="nu_qtd_trabalha">--}}
    {{--<label for="nTrabalham" class="active">Quantos trabalham?</label>--}}
    {{--</div>--}}

    {{--<div class="input-field col s3">--}}
    {{--<input type="radio" id="tp_deficiencia_sim" class="with-gap"--}}
    {{--name="tp_deficiencia" value="S"><label for="tp_deficiencia_sim">Sim.</label>--}}
    {{--<input type="radio" id="tp_deficiencia_nao" class="with-gap"--}}
    {{--name="tp_deficiencia" value="N"><label for="tp_deficiencia_nao">Não.</label>--}}
    {{--<label for="tp_deficiencia" class="active">Alguem de sua família tem--}}
    {{--alguma doença mental ou--}}
    {{--transtorno mental? </label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<input type="text" id="tx_deficiencia" name="tx_deficiencia"--}}
    {{--class="validate">--}}
    {{--<label for="tx_deficiencia" class="active">Se sim. Qual?</label>--}}
    {{--</div>--}}


    {{--<div class="input-field col s3">--}}
    {{--<input type="radio" id="sim3" name="tp_acompanhamento_psic" class="with-gap"><label--}}
    {{--for="sim3">Sim.</label>--}}
    {{--<input type="radio" id="nao3" name="tp_acompanhamento_psic" class="with-gap"><label--}}
    {{--for="nao3">Não.</label>--}}
    {{--<label for="tp_acompanhamento_psic" class="active">Você ou alguem da--}}
    {{--família faz acompanhamento psiquiátrico?</label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<input type="text" class="validate" id="tx_local_acompanhamento"--}}
    {{--name="tx_local_acompanhamento">--}}
    {{--<label class="active" for="tx_local_acompanhamento">Local do acompanhamento</label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<input type="text" class="validate" id="fk_gastos_saude"--}}
    {{--name="fk_gastos_saude">--}}
    {{--<label class="active" for="fk_gastos_saude">Mensalidade do local.</label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<input type="radio" id="sim2" name="tp_drogas" class="with-gap"><label--}}
    {{--for="sim2" value="s">Sim.</label>--}}
    {{--<input type="radio" id="nao2" name="tp_drogas" class="with-gap"><label--}}
    {{--for="nao2" value="n">Não.</label>--}}
    {{--<label for="tp_acompanhamento_psic" class="active">Você é usuário de drogas?</label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3" align="left">--}}
    {{--<label for='observacao' class="active">Observação:</label>--}}
    {{--<input type="text" class="validate" name="observacao" id="observacao"--}}
    {{--required>--}}
    {{--</div>--}}

    {{--<div class="imput field col s3">--}}
    {{--<select name="fk_aluno">--}}
    {{--@foreach($dados2 as $dado)--}}
    {{--<option value="" disabled selected>Selecione supervisor</option>--}}
    {{--<option value="{{$dado['id_aluno']}}">{{$dado['tx_nome']}}</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--<label for="aluno">Aluno:</label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<select name="fk_supervisor">--}}
    {{--@foreach($dados as $dado)--}}
    {{--<option value="" disabled selected>Selecione supervisor</option>--}}
    {{--<option value="{{$dado['id_supervisor']}}">{{$dado['tx_nome']}}</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--<label for="supervisor">Supervisor:</label>--}}
    {{--</div>--}}
    {{--<div class="input-field col s3">--}}
    {{--<select name="fk_paciente">--}}
    {{--@foreach($dados3 as $dado)--}}
    {{--<option value="" disabled selected>Selecione supervisor</option>--}}
    {{--<option value="{{$dado['id_paciente']}}">{{$dado['tx_nome']}}</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}
    {{--<label for="supervisor">Paciente:</label>--}}
    {{--</div>--}}

    {{--<input type="submit" value="Salvar" id="salvar" name="salvar" class="btn btn-success">--}}
    {{--<a href="{{route('triagem.index')}}" class="btn red">Cancelar</a>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<script>--}}
    {{--function EventAlert() {--}}
    {{--swal("Cadastro efetuado com sucesso!", "success")--}}
    {{--}--}}

    {{--$(document).ready(function () {--}}
    {{--$('select').material_select();--}}
    {{--});--}}

    {{--</script>--}}


@endsection
