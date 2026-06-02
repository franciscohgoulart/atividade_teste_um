CREATE DATABASE sistema_simples;
-- Criando a tabela de usuários e inserindo um usuário de exemplo
USE sistema_simples;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', '123');
-- O código SQL acima cria um banco de dados chamado "sistema_simples", em seguida, cria uma tabela chamada "users" com três colunas: "id" (chave primária auto-incrementada), "username" (nome de usuário) e "password" (senha). Por fim, insere um usuário de exemplo com o nome de usuário "admin" e a senha "123".