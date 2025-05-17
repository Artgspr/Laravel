@extends("layout.layout_alunos._site")
@section("titulo","Aluno")
@section ("conteudo")
<div class='container'>
 <h3 class='center'>Lista de Alunos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>  <!-- CABECALHO -->
                    <td>Id</td><td>Nome</td><td>Telefone Celular</td>
                    <td>Imagem</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
            @foreach($rows as $row)   <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td>{{ $row->id }}</td><td>{{ $row->nome }}</td><td>{{ $row->celular }}</td>
                    <td><img src="{{ asset($row->imagem) }}" alt="{{ $row->nome }}" style="width: 100px; height: 100px"></td>
                    <td>   <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('admin.aluno.editar',$row->id) }}">Alterar</a>
                        <a class='btn rede' href="{{ route('admin.aluno.excluir',$row->id) }}">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>   
    </div>
    <div class='row'>  <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.aluno.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection