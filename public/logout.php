<?php
// Arquivo responsável por destruir a sessão do usuário e redirecionar para a página de login 
    session_start();
    session_destroy();
     
    // Redirecionar para a página de login
    header("Location: ../index.php");
    exit();

?>