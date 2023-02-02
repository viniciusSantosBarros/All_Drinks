<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$bebida = filter_input(INPUT_POST, 'bebida');
$valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_INT);

if($id && $bebida && $valor){
    $sql = $pdo->prepare("UPDATE estoque SET bebida = :bebida, valor = :valor WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':bebida', $bebida);
    $sql->bindValue(':valor', $valor);
    $sql->execute();

    header('Location:estoque.php');
    exit;
} else{
    header('Location:estoque.php');
    exit;
}

