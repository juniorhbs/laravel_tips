<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
</head>
<body>
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <label for="">Nome do Usuário</label>
    <input type="text" name="name">

    <label for="">E-mail do Usuário</label>
    <input type="email" name="email">

    <label for="">Senha do Usuário</label>
    <input type="password" name="password">

    <input type="submit" value="Cadastrar Usuário">
</form>

<a href="{{ route('user.index') }}">Lista de Usuários</a>

</body>
</html>
