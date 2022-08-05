<?php

// verifica senão tem nenhuma SESSION ativa antes de inicializar uma nova

if (!isset($_SESSION)) {     // caso não haja uma sessão ativa, inicie uma!
session_start();
}

//isset = comando pra 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'tarefas';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    echo "Falha ao estabelecer conexão!";
} else{
    ($conexao);
    /* echo "oi"; */
}

?>