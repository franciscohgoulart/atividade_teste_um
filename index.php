<?php

// iniciar sessão no servidor
session_start();

//incluir conexão com o banco
include("infra/db/connect.php");

//verificar se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){

//capturar os dados do formulário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    //exibir os dados capturados no console do navegador
    echo "<script> console.log('usuario captado com sucesso $usuario') </script>";
    echo "<script> console.log('senha captado com sucesso $senha') </script>";

    //consultar o banco de dados para verificar se o usuário existe
    $sql = "SELECT * FROM users WHERE username ='$usuario' AND password ='$senha'";

    //exibir a consulta SQL no console do navegador para verificar se a consulta está correta
    $resultado = $conn -> query($sql);

    //verificar se a consulta retornou algum resultado se sim redireciona para a página de home, caso contrário, exibir uma mensagem de erro
    if($resultado->num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Esse meta tag define o conjunto de caracteres e a visualização para dispositivos móveis -->

    <title>Tela de Login</title>
    <!-- Isso é o titulo do site -->

    <link rel="stylesheet" href="styles/style.css">
    <!-- Isso é o estilo do site -->
</head>
<body>
    <?php
    include("public/components/navbar.php")
    ?>
    <!-- Isso é a navbar -->

    <h1>Tela de Login - PHP</h1>
    <!-- Isso é o título da página -->

    <form method="POST">
    <!-- Isso é o formulário de login -->

    <!-- O label serve para descrever o campo do formulário, neste caso está descrevendo o campo de usuário e senha -->
        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <!-- imput serve para capturar os dados do formulário -->
        <label>Senha</label>
        <input type="password" name="senha"> <br>

        <?php
        // Verificar se vai exibir a mensagem de erro
        if(isset($erro)){
            echo $erro;
        }
        
        ?>
        <br>

        <button type="submit">Entrar</button>
        <!-- o button serve para enviar o formulário -->
    </form>
</body>
</html>