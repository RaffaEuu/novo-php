<?php

require('../conection/conexao.php');

$id = $_GET["id"];

$query = "DELETE FROM `tarefa` WHERE `tarefa`.`id` = $id";

$sql = mysqli_query($conexao, $query);

$_SESSION['mensagem'] = 'exluido com sucesso!';
$_SESSION['tipo_msg'] = 'danger';


header("location: ../view/form.php");

?>