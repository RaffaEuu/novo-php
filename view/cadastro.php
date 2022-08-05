<?php

if (isset($_POST['cadastro'])) {

    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    require('../conection/conexao.php');

    $query = "INSERT INTO `cadastro`(`login`, `senha`) 
    VALUES ('$user','$password')";

    $sql = mysqli_query($conexao, $query);

    $_SESSION['mensagem'] = 'Cadastro feito com sucesso ';

    header("location: login.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <h2>CRUD</h2>
    <form action="cadastro.php" method="post">
        <fieldset>
            <legend>Cadastro Usuario</legend>
            <p>
                <label for="usuario">Usuário</label> <br>
                <input type="text" name="usuario">
            </p>
            <p>
                <label for="senha">Senha</label> <br>
                <input type="password" name="senha">
            </p>
            <input type="submit" value="Cadastrar" name="Cadastro">
        </fieldset>
    </form>
</body>

</html>