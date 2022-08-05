<?php

require('../conection/conexao.php');

$id = $_GET["id"];

$query = "DELETE FROM `tarefa` WHERE `tarefa`.`id` = $id";

$sql = mysqli_query($conexao, $query);

$_SESSION['mensagem'] = 'exluido com sucesso!';

header("location: ../view/form.php");

?>