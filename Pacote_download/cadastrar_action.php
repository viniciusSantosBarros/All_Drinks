<?php
require 'config.php';

$bebida = filter_input(INPUT_POST, 'bebida');
$valor = filter_input(INPUT_POST,'valor');

$sql = $pdo->prepare("INSERT INTO estoque (bebida, valor) VALUES (:bebida, :valor)");

$sql->bindValue(':bebida', $bebida);
$sql->bindValue(':valor', $valor);
$sql->execute();


header ("location: estoque.php");