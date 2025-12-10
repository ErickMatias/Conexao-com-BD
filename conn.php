<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "conexao";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}else {
    echo "<h1>Conexão feita com sucesso</h1>";
}

?>