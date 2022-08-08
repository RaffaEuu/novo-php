<div class="container">
    <div class="alerta" style="margin-top: 1%;">
    
        <?php
            if (isset($_SESSION['mensagem'])) { ?>

                        <!-- esse echo | manda exibir o tipo da mensagem  -->
        <div class="alert alert-<?php echo $_SESSION['tipo_msg'] ?> alert-dismissible fade show" role="alert">

            <?php echo $_SESSION['mensagem']; ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>




        <?php } 
             unset($_SESSION['mensagem']);
             unset($_SESSION['tipo_msg']);
            ?>

    </div>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="form.php" class="navbar-brand">CRUD PHP</a>
            <a href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
    </nav>