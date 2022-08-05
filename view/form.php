<?php

session_start();

if ((isset($_SESSION['usuario']) == false) and (isset($_SESSION['senha']) == false)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

    header('location: login.php');
}

$logado = $_SESSION['usuario'];

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>

<body>

    <div class="alerta">
        <?php

            if (isset($_SESSION['mensagem'])) {
                echo $_SESSION['mensagem'];
            }

        ?>

    </div>


    <h2>CRUD</h2>
    <a href="logout.php">Encerrar</a>
    <br>
    <br>
    <br>

    <form action="../back-end/processa.php" method="post">

        <fieldset>
            <legend>Cadastro de tarefas</legend>
            <p>
                <label for="titulo">titulo</label>
                <input type="text" name="titulo" placeholder="O poço">
            </p>
            <p>
                <label for="descricao">Descrição</label>
                <textarea name="descricao" cols="30" rows="10" placeholder="Filme Filme Filme"></textarea>
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </fieldset>

    </form>

    <table border="1">
        <thead>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Data de criação</th>
            <th>ação</th>
        </thead>
        <tbody>
            <?php
            include('../conection/conexao.php');

            $query = "SELECT * FROM `tarefa`";

            $sql = mysqli_query($conexao, $query);

            while ($row = mysqli_fetch_assoc($sql)) { ?>
                <tr>
                    <td> <?php echo $row['titulo'] ?> </td>
                    <td> <?php echo $row['descricao'] ?> </td>
                    <td> <?php echo $row['data'] ?> </td>
                    <td> <a href="../back-end/alterar.php?id=<?php echo $row['id'] ?>">Alterar</a>
                        &nbsp; &nbsp;
                        <!-- adiciona 2 espaços -->
                        <a href="../back-end/excluir.php?id=<?php echo $row['id'] ?>">Excluir</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

                <script>
                    const $aviso = document.querySelector(".alerta");

                    if ($aviso) {
                        setTimeout(() => {
                            $aviso.remove ();
                        }, 2000);
                    }
                </script>



</body>

</html>