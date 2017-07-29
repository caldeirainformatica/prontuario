{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Antonio RS-PC--}}
 {{--* Date: 11/07/2017--}}
 {{--* Time: 10:06--}}
 {{--*/--}}
@extends('templates/principal')

@section('conteudo')

    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div>
                        <h4 class="grey-text" align="center">Lista de Médicos/Alunos</h4>
                    </div>
                    <table class="striped bordered">
                        <thead>
                        <tr>
                            <th>Ação</th>
                            <th>Codigo</th>
                            <th>Nome</th>
                            <th>Fixo</th>
                            <th>Celular</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td>{{$dado['nu_codigo']}}</td>
                                <td>{{$dado['tx_nome']}}</td>
                                <td>{{$dado['nu_fone']}}</td>
                                <td>{{$dado['nu_fone2']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="right-align">
                    <a class="btn-floating btn-large waves-effect waves-light" href="{{route('aluno.incluir')}}"><i
                                class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection