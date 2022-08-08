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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/61b248fb6c.js" crossorigin="anonymous"></script>
    <title>Form php</title>
</head>

<body>
    <?php 
include('header.php');
?>


    <div class="row">
        <div class="col-md-4">
            <h2>CRUD</h2>

            <form action="../back-end/processa.php" method="post">

                <fieldset>
                    <legend>Cadastro de tarefas</legend>
                    <div class="form-group">
                        <!-- <label for="titulo" class="form-label">titulo</label> -->
                        <input type="text" name="titulo" placeholder="Titulo" class="form-control">
                    </div>
                    <div class="form-group">
                        <!-- <label for="descricao" class="form-label">Descrição</label> -->
                        <textarea name="descricao" cols="30" rows="10" placeholder="Descrição do filme"
                            class="form-control"></textarea>
                    </div>
                    <p>
                        <input type="submit" name="salvar" value="Enviar" class="btn btn-primary btn-block">
                    </p>
                </fieldset>

            </form>
        </div>
        <div class="col-md-8" style="margin-top: 10%;">
            <table class="table table-bordered">
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
                        <td> <a class="btn btn-secondary" href="../back-end/alterar.php?id=<?php echo $row['id'] ?>"> <i
                                    class="fas fa-marker"></i> </a>
                            &nbsp; &nbsp;
                            <!-- adiciona 2 espaços -->
                            <a class="btn btn-danger" href="../back-end/excluir.php?id=<?php echo $row['id'] ?>"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    <script>
    const $aviso = document.querySelector(".alerta");

    if ($aviso) {
        setTimeout(() => {
            $aviso.remove();
        }, 2000);
    }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>