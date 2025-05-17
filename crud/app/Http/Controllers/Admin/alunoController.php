<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class alunoController extends Controller
{
    //
    public function index(){
        $rows = Aluno::all();
        return view('admin.aluno.index', compact('rows'));
    }

    public function adicionar() {
        return view('admin.aluno.adicionar');    
    }

    public function salvar(Request $req){
        $dados = $req->all();
        if($req->hasFile('arquivo')){
            $imagem = $req->file('arquivo');
            $num = rand(1111,9999);
            $dir = "img/aluno/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        Aluno::create($dados);
        return redirect()->route('admin.aluno');
    }

    public function editar($id) {
        // repare que ele recebe o id da ROTA
        $linha = Aluno::find($id);
        // carrega o registro (realiza um select e um fetch internamente)
        return view('admin.aluno.editar',compact('linha'));
        // manda o registro encontrado para ser editado na visão
    }
        
    public function excluir($id) {
        // repare que ele recebe o id da ROTA
        Aluno::find($id)->delete();
        // apos selecionar o registro, é chamado o
        // método DELETE do OBJETO registro
        // é mapeado internamente como um 'delete from'
        // interno que rodara no BD
        return redirect()->route('admin.aluno');
        // abre a visão da lista de cursos}
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        if($req->hasFile('arquivo')){
            $imagem = $req->file('arquivo');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        Aluno::find($id)->update($dados);
        return redirect()->route('admin.aluno');
    }
}