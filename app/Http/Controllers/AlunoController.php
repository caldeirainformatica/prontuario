<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Supervisor;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();

        return view('aluno.index', compact('dados'));
    }

    public function incluir()
    {
        //Recebe dados do supervisor
        $supervisores = Supervisor:: all();
        return view('aluno.form', compact('supervisores'));

    }

    public function alterar($id)
    {
        $dados = Aluno::where('id_aluno', $id)->get();
        $dados = $dados[0];
        $supervisores = Supervisor:: all();
//            print_r($dados);
//            die;
        return view('aluno.form', ['dados' => $dados, 'supervisores' => $supervisores]);
    }

    public function salvar(AlunoRequest $dados)
    {
        if ($dados['id_aluno']) {
            Aluno::find($dados['id_aluno'])->update($dados->all());
            return redirect(route('aluno.index'));
        } else {
            Aluno::create($dados->all());
            return redirect(route('aluno.index'));
        }
    }

    public function deletar($dados)
    {
        Aluno::where('id_aluno', $dados)->delete();
        return redirect(route('aluno.index'));
    }

    
}
