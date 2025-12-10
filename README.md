# Conexão com Banco de Dados em PHP

Este projeto contém um exemplo simples de conexão com um banco de dados MySQL usando PHP.

## Descrição

O script `conn.php` realiza a conexão com um banco de dados chamado `conexao`.  
Se a conexão for bem-sucedida, será exibida a mensagem: Conexão feita com sucesso

Caso contrário, será exibida a mensagem de erro correspondente.

## Configuração

1. Certifique-se de que você possui um servidor local (como XAMPP, WAMP ou MAMP) com MySQL e PHP instalados.
2. Crie um banco de dados chamado `conexao`.
3. Altere os dados da conexão no script caso sejam diferentes do padrão:

```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "conexao";


