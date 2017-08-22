<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Entrada de Veículos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/home">Controle de Estacionamento</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/home">Home</a></li>
            <li><a href="/entrada">Entradas</a></li>
            <li><a href="/listagem">Status Estacionamento</a></li>
        </ul>
    </div>
</nav>

@yield('content')

</body>
</html>