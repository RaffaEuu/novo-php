<?php
    $id = $_GET["id"];

    include('../conection/conexao.php');

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];


    $query = "UPDATE `tarefa` SET `titulo`='$titulo',`descricao`='$descricao' WHERE `id` = '$id'";
    $sql = mysqli_query($conexao, $query);

    $_SESSION['mensagem'] = 'Alterado com sucesso!';
    $_SESSION['tipo_msg'] = 'warning';

    header("location: ../view/form.php");
?>