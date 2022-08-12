<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar cadastro</title>
    </head>
    <body style="text-align:center">
        <div>
            <h1>Listagem de Usuários</h1>

            @foreach($users as $user)
            <p><h3>Nome: {{ $user->name }}</h3>
            <button onclick="document.location='/listar/{{ $user->id }}'">Exibir Este</button>
            <button onclick="document.location='/editar/{{ $user->id }}'">Atualizar Este</button>
            <button onclick="document.location='/excluir/{{ $user->id }}'">Deletar Este</button></p>
            @endforeach

            <br><br>
            <button onclick="document.location='/adicionar'">Criar</button>
        </div>
    </body>
</html>