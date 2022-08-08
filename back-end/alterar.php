<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php

    $id = $_GET["id"];


    require('../conection/conexao.php');


    $query = "SELECT `titulo`, `descricao` FROM `tarefa` WHERE `id`= $id;";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_assoc($sql);

    $titulo = $row['titulo'];
    $descricao = $row['descricao'];

    /* header("location: form.php"); */

    ?>

    <?php 
    include('../view/header.php');
    ?>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="../view/editar.php?id=<?php echo $id ?>" method="post">

                    <fieldset>
                        <legend>Alteração de tarefas</legend>
                        <div class="form-group">
                            <!-- <label for="titulo" class="form-label">titulo</label> -->
                            <input type="text" name="titulo" placeholder="Titulo" class="form-control" value="<?php echo $titulo ?>">
                        </div>
                        <div class="form-group">
                            <!-- <label for="descricao" class="form-label">Descrição</label> -->
                            <textarea name="descricao" cols="30" rows="10" placeholder="Descrição do filme"
                                class="form-control"><?php echo $descricao ?></textarea>
                        </div>
                        <p>
                            <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                        </p>
                    </fieldset>

                </form>
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



</body>

</html>