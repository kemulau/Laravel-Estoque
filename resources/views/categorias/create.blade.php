<form action="{{ route('categorias.store') }}" method="post">
        @csrf
        {{session('mensagem')}}
        <p>Nome: <input type="text" name="nome"></p> 
        <p> Descrição: <textarea name="descricao"></textarea></p>
        <input type="submit" value="Cadastrar">
    </form>