<?php
session_start();


?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/usuario.css">
  </head>
  <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vendas
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?page=novoVendas">Cadastrar</a></li>
                    <li><a class="dropdown-item" href="?page=listarVendas">Listar</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Produto
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?page=novoProduto">Cadastrar</a></li>
                    <li><a class="dropdown-item" href="?page=listarProduto">Listar</a></li>
                </ul>
                </li>
            </ul>
            <h2>Bem-vindo, <?php echo $_SESSION["email"]; ?>!</h2>
            <a href="logout.php">Sair</a>
        </div>
        </div>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]) {
                    case "novoVendas":
                        include("novo-vendas.php");
                    break;
                    case "listarVendas":
                        include("listar-vendas.php");
                    break;
                    case "salvarVendas":
                        include("salvar-vendas.php");
                    break;
                    case "editarVendas";
                        include("editar-vendas.php");
                    break;
                    case "novoProduto":
                        include("novo-produto.php");
                    break;
                    case "listarProduto":
                        include("listar-produto.php");
                    break;
                    case "salvarProduto":
                        include("salvar-produto.php");
                    break;
                    case "editarProduto";
                        include("editar-produto.php");
                    break;
                    default:
                        print "<h1>Bem Vindo!</h1>";
                }
            ?>
            </div>
        </div>            
    </div>
    
    <script src="js/checkbox.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>