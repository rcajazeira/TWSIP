<?php

// Configurações do banco de dados
$servername = "localhost"; // substitua pelo nome do seu servidor
$username = "root"; // substitua pelo nome de usuário do seu banco de dados
$password = ""; // substitua pela senha do seu banco de dados
$dbname = "shopping_china"; // substitua pelo nome do seu banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

?>






