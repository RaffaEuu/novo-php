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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Cadastro de Usuario</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
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
                        <div class="text-center">
                            <a href="login.php">Login</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>




    <h2>CRUD</h2>

</body>

</html>