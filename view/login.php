<?php



if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    include('../conection/conexao.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM `cadastro` WHERE `login`='$usuario' and `senha`='$senha'";

    $sql = mysqli_query($conexao, $query);

    if (mysqli_num_rows($sql) >= 1) {

        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        $_SESSION['mensagem'] = 'Login sucesso!';

        header('location: form.php');
    } else {
        unset($_SESSION['usuario']);
        unset($_SESSION['usuario']);     // unset apaga caso as info estejam erradas

        header('location: login.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="col-4">
            <div class="card-header">
                CRUD
            </div>
            <form action="login.php" method="post">
                <fieldset>
                    <legend>Login</legend>
                    <div class="mb-3">
                        <label for="usuario">Usuário</label> <br>
                        <input type="text" name="usuario" class="form-control">
                    </div class="mb-3">
                    <div class="mb-3">
                        <label for="senha">Senha</label> <br>
                        <input type="password" name="senha" class="form-control">
                    </div class="mb-3">
                    <input type="submit" value="Entrar">
                    <a href="cadastro.php">Cadastrar</a>
                </fieldset>
            </form>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>

</body>

</html>