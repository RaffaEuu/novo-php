<?php

require('../conection/conexao.php');

$titulo = $_POST["titulo"];

$descricao = $_POST["descricao"];

$query = "INSERT INTO `tarefa`(`titulo`, `descricao`) VALUES ('$titulo','$descricao')";

$sql = mysqli_query($conexao, $query);

$_SESSION['mensagem'] = 'tarefa salva com sucesso!!!';

header("location: ../view/form.php");

?>