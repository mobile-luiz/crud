CRUD com PHP e MySQL
Este projeto é um exemplo de como criar um sistema simples de CRUD (Criar, Ler, Atualizar e Deletar) utilizando PHP e MySQL. O CRUD permite que você adicione, visualize, edite e remova registros em um banco de dados MySQL.

Funcionalidades
Criar: Adiciona um novo registro (nome, email, telefone).
Ler: Exibe a lista de registros no banco de dados.
Atualizar: Modifica os dados de um registro existente.
Deletar: Remove um registro do banco de dados.
Requisitos
Para rodar esse projeto, você precisa de:

PHP (versão 7.4 ou superior).
MySQL.
Um servidor local como XAMPP, WAMP ou similar.

Passo a Passo para Usar
1. Criar o Banco de Dados
Primeiro, você precisa criar um banco de dados no MySQL. Siga esses passos:

Abra o phpMyAdmin (ou qualquer ferramenta para gerenciar o MySQL).
Crie um novo banco de dados:
sql
Copiar
Editar
CREATE DATABASE crud_example;
Dentro desse banco de dados, crie uma tabela chamada records:
sql
Copiar
Editar
CREATE TABLE records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20)
);
