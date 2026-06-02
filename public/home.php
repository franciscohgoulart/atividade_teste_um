<?php
// Arquivo responsável por exibir a página de home, verificar se o usuário está logado, exibir o nome do usuário logado e permitir o cadastro de novos usuários
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location: ../index.php");
        exit();
    }

    include("../infra/db/connect.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $novoUsuario = $_POST["usuario"];
        $novaSenha = $_POST["senha"];

        $sql = "INSERT INTO users(username, password) VALUES ('$novoUsuario','$novaSenha')";

        if($conn->query($sql) === TRUE){

            echo "<script> alert('Usuário Cadastrado com Sucesso!');</script>";

        }else{
            echo "<script> alert('Erro: Usuário Não Cadastrado!');</script>";  
        }

    }

?>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

<!-- Inclui os componentes da tabela da navbar -->
    <?php
    include("components/navbar.php")
    ?>

<!-- Esse SESSION esta puxando o nome do usuário logado -->
    <h1>Bem vindo, <?php echo $_SESSION["usuario"]; ?> </h1>

    <!-- Link para sair da sessão -->
    <a href="logout.php">Sair</a>

    <hr>
    <h3>Cadastrar Novos Usuários</h3>
    <form method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <label>Senha</label>
        <input type="password" name="senha"> <br>
        <br>
        <button type="submit">cadastrar</button>
    </form>

    <hr>

<!-- Inclui os componentes da tabela da navbar -->
    <?php
    include("components/table.php")
    ?>


</body>
</html>