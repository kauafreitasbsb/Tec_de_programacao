<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RABELO CALÇADOS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOJA DE SAPATOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">
      Sistema de Vendas
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">

        <!-- CLIENTE -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cliente-cadastrar">Cadastrar Cliente</a></li>
            <li><a class="dropdown-item" href="?page=cliente-listar">Listar Clientes</a></li>
          </ul>
        </li>

        <!-- VENDEDOR -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Vendedores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=vendedor-cadastrar">Cadastrar Vendedor</a></li>
            <li><a class="dropdown-item" href="?page=vendedor-listar">Listar Vendedores</a></li>
          </ul>
        </li>

        <!-- MARCA -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=marca-cadastrar">Cadastrar Marca</a></li>
            <li><a class="dropdown-item" href="?page=marca-listar">Listar Marcas</a></li>
          </ul>
        </li>

        <!-- MODELO -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Modelos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=modelo-cadastrar">Cadastrar Modelo</a></li>
            <li><a class="dropdown-item" href="?page=modelo-listar">Listar Modelos</a></li>
          </ul>
        </li>

        <!-- VENDAS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Vendas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=venda-cadastrar">Cadastrar Venda</a></li>
            <li><a class="dropdown-item" href="?page=venda-listar">Listar Vendas</a></li>
          </ul>
        </li>

      </ul>

    </div>

  </div>
</nav>

        
      </ul>

    </div>
  </div>
</nav>
<div class="container mt-3">
	<div class="row">
		<div class="col">
			<?php
			     	//conexão com banco de dados
				include('config.php');

					//includes das páginas
			    switch (@$_REQUEST['page']) {
			    	//marcas
			    	// CLIENTE
    case "cliente-cadastrar":
        include("cliente-cadastrar.php");
        break;

    case "cliente-listar":
        include("cliente-listar.php");
        break;

    case "cliente-salvar":
        include("cliente-salvar.php");
        break;

    case "cliente-editar":
        include("cliente-editar.php");
        break;

    // VENDEDOR
    case "vendedor-cadastrar":
        include("vendedor-cadastrar.php");
        break;

    case "vendedor-salvar":
        include("vendedor-salvar.php");
        break;

    case "vendedor-listar":
        include("vendedor-listar.php");
        break;

    case "vendedor-editar":
        include("vendedor-editar.php");
        break;

    // MARCA
    case "marca-cadastrar":
        include("marca-cadastrar.php");
        break;

    case "marca-listar":
        include("marca-listar.php");
        break;

        case "marca-salvar":
        include("marca-salvar.php");
        break;

        case "marca-editar":
        include("marca-editar.php");
        break;





    // MODELO
    case "modelo-cadastrar":
        include("modelo-cadastrar.php");
        break;

    case "modelo-listar":
        include("modelo-listar.php");
        break;

    case "modelo-salvar":
        include("modelo-salvar.php");
        break;

    case "modelo-editar":
        include("modelo-editar.php");
        break;

    // VENDA
    case "venda-cadastrar":
        include("venda-cadastrar.php");
        break;

    case "venda-listar":
        include("venda-listar.php");
        break;

    case "venda-salvar":
        include("venda-salvar.php");
        break;

    case "venda-editar":
        include("venda-editar.php");
        break;

    // PÁGINA INICIAL
    default:
        echo "<h1>Bem-vindo</h1>";




			   
			    }
			?>
</div>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>