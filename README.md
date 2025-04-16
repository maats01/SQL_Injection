# SQL_Injection

Este repositório contém um projeto desenvolvido utilizando PHP 8. Neste arquivo README, você encontrará um guia passo a passo para executar o projeto em seu ambiente local.

## Visão geral
Este projeto tem o propósito de mostrar de modo prático e educativo as diferenças entre prepared statements para queries montadas com concatenação simples de strings no PHP. Como consequência, também é possível ver na prática a vulnerabilidade a SQL Injection.

## Pré-requisitos

- PHP 8
- Ambiente de desenvolvimento para PHP (ex.: Laragon ou XAMPP)

## Passo 1: Clonar o repositório

```bash
git clone https://github.com/maats01/SQL_Injection.git
```
Obs.: o repositório deve estar na pasta raíz do seu ambiente de desenvolvimento (www - Laragon; htdocs - XAMPP).

## Passo 2: Criando banco de dados

Como a aplicação se conecta com o banco de dados usando mysqli, é necessário redefinir as variáveis constantes em config.php, para se adequar ao seu banco de dados. Deve ser criado um schema com uma tabela "usuarios" com id (PK), usuario (varchar) e senha (varchar). Em seguida, pode ser adicionado um usuário fictício para testar a aplicação.

## Passo 3: Iniciar o servidor

Inicie o servidor Apache utilizando o ambiente de desenvolvimento de sua preferência:

- XAMPP: Abra o XAMPP Control Panel e clique em "Start" no módulo Apache.
- Laragon: Abra o Laragon e clique em "Start All" ou inicie apenas o Apache.

## Passo 4: Acessando o sistema

Após iniciar o servidor, o sistema poderá ser acessado localmente via navegador: http://localhost/SQL_Injection
