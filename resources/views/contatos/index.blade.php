@extends ('layout.site')

@section('titulo','contatos')

@section('conteudo')
    <h3>Pagina de Contatos</h3>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Celular</th>
        </tr>
        @foreach ($contatos as $contato)
        <tr>
            <td>{{ $contato['nome'] }}</td>
            <td>{{ $contato['cel'] }}</td>
       </tr>
        @endforeach   
   </table>
@endsection 