<h3>Usuários Cadastrados</h3>

<table border="1" cellpadding="3">
<!-- Cabeçalho da tabela -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>
    <!-- elementos fundamentais para estrutura da tabela -->

    <?php
    
    // Consulta SQL para selecionar todos os usuários cadastrados no banco de dados
    $sqlUsuarios = "SELECT * FROM users";
    $resultadoUsuarios = $conn->query($sqlUsuarios);
    
    // Loop para exibir os usuários cadastrados na tabela
    while($linha = $resultadoUsuarios->fetch_assoc()){

        echo "
        <tr>
            <td>" . $linha["id"]."</td>
            <td>" . $linha["username"]."</td>
            <td>" . $linha["password"]."</td>
        </tr>
        ";
// o fetch_assoc() é um método que retorna um array associativo da linha atual do resultado da consulta SQL, ou seja, ele retorna na matriz onde as chaves são os nomes das colunas da tabela e os valores são os valores correspondentes a essas colunas para a linha atual. Neste caso, ele está sendo usado para exibir o ID, nome e senha de cada usuário cadastrado na tabela.
    }


    ?>

</table>