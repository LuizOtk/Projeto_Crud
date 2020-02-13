<?php
session_start();

include 'conexao.php';

if(isset($_SESSION["login"])){
    session_destroy();
}

// header = redirecionamento de página
header("Location:login.php");
?>