<?php
require 'config.php';

$listas = [];

$sql = $pdo->query("SELECT * FROM estoque");

if($sql-> rowCount() > 0){
   $listas = $sql->fetchall(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estoque</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <style>
      body{
        background-image: linear-gradient(rgba(0, 187, 255, 0.331), transparent);
        background-attachment: fixed;
      }
    </style>
</head>
<body>

<div class="container">
  <div class="row">
  <nav aria-label="breadcrumb" class="mx-1 mt-1">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="cadastrar.php">Adicionar bebida</a></li>
  </ol>
</nav>

   <div class="container">
    <div class="row">
      <div class="col-10 text-center"><h1 class="display-4">Estoque</h1></div>
      <div class="col-2 text-end"><a href="cadastrar.php"><button class="btn btn-primary mt-4">Cadastrar bebida</button></a></div>
      <hr>
    </div>
   </div>
   
    <div class="col-12">  
    <table class="table table-striped border mt-4">
      <tr>
        <th class="text-center table-dark">id</th>
        <th class="text-center table-dark">Bebida</th>
        <th class="text-center table-dark">Valor</th>
        <th class="text-center table-dark">Ações</th>
      </tr>

      <?php foreach($listas as $lista):{}?>

      <tr class="table-info">
        <td class="text-center"><?=$lista['id'];?></td>
        <td class="text-center"><?=$lista['bebida'];?></td>
        <td class="text-center"><?=$lista['valor'];?></td>
        <td class="text-center"><a href="editar.php?id=<?=$lista['id'];?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
         <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
         <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
         </svg></i></a>
            <a href="deletar.php?id=<?=$lista['id'];?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg></i></a>
      </td>
  
      </tr>

      <?php endforeach;?>

    </table>

    </div>
  </div>
</div>

<footer style="background-color: black; color:white; text-align: center;margin-top: 50px;">     
  ©TODOS OS DIREITOS RESERVADOS° ALL DRINKS
</footer>
  
</body>
</html>


