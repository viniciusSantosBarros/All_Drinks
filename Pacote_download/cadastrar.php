<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar_bebida</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="estilo.css">
    <style>
      body{
        background-image: linear-gradient(rgba(0, 187, 255, 0.331), transparent);
        background-attachment: fixed;
      }

      #titulo{
        background-color:black;
        color:white;
        height:88px;
        text-align:center;
        padding-top:20px;
      }
      
    </style>
</head>
<body>

<div id="titulo">
  <strong><h2>Cadastrar nova bebida</h2></strong>
</div>

<nav aria-label="breadcrumb" class="mx-5 mt-1">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="estoque.php">Estoque</a></li>
  </ol>
</nav>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-4 card text-bg-light p-4">

        <form action="cadastrar_action.php" method="POST">
            Bebida: <input type="text" class="form-control mb-3" name="bebida">
            Valor: <input type="number" class="form-control mb-3" name="valor">
            <input type="submit" value="Salvar" name="submit" class="btn btn-primary">
        </form>

        </div>
    </div>
</div>

</body>
</html>
