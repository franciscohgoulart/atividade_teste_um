<?php
// Arquivo responsável por estabelecer a conexão com o banco de dados MySQL usando as credenciais fornecidas e verificar se a conexão foi bem-sucedida ou se ocorreu um erro.
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    // As variáveis acima armazenam as informações necessárias para estabelecer a conexão com o banco de dados.

    $conn = new mysqli($host,$user,$pass,$db);

// Verificar se a conexão foi bem-sucedida ou se ocorreu um erro e exibir a mensagem correspondente no console do navegador.
    if ($conn->connect_error){
        echo "<script> console.log('erro na conexão com o banco') </script>";
    }else{
        echo "<script> console.log('conexão com o banco foi um sucesso')</script>";
    }

?>