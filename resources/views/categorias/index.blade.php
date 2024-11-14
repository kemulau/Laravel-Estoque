<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Categorias</title>
</head>
<body>
    <h1>Listagem de Categorias</h1>
    {{session('mensagem')}}
    
    @if($categorias->isEmpty())
        <h3>Nenhuma categoria cadastrada</h3>
   @else 
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->nome}}</td>
                <td>{{$categoria->descricao}}</td>
                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir">
                </form>
                <a href="{{ route('categorias.update', $categoria->id) }}">Editar</a>
                <a href="{{ route('categorias.show', $categoria->id) }}">Visualizar Detalhes</a>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>
</html>