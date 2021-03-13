<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="app/style/style.css" rel="stylesheet"> 
    <title>CRUD com Ajax</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <nav class="bg-dark text-light">
        <ul class="nav nav-pills">
            <li class="nav-item nav-item px-md-2">
                <a class="nav-link active" aria-current="page" id="tutulo" href="#">Sistema</a>
            </li>
            <li class="nav-item dropdown nav-item px-md-2">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="menu" href="#" role="button" aria-expanded="false">Cadastro</a>
                <ul class="dropdown-menu" id="ul">
                    <li><a class="dropdown-item" id="lista_grupo" href="index.php?pagina=lista_grupo">Grupo</a></li>
                    <li><a class="dropdown-item" href="index.php?pagina=marca" id="Marca">Marca</a></li>
                    <li><a class="dropdown-item" href="#" id="Produto">Produto</a></li>
                    <li><a class="dropdown-item" href="#" id="Estoque">Estoque</a></li>
                </ul>
            </li>
            <li class="nav-item px-md-2">
                <input type="text" class="form-control" id="pesquisa" placeholder="Pesquisa">
            </li>
            <li class="nav-item px-md-2">
                <a href="#" type="button" id="" class="btn btn-primary" onclick="pesquisar(0);">Pesquisar </a>
            </li>
            <li class="nav-item px-md-2">
                <a href="#" type="button" id="" class="btn btn-primary" onclick="monta_formulario(0);">Novo </a>
            </li>
        </ul>
    </nav>
        <div id="corpo" class="container">