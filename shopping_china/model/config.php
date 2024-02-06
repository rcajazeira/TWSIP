<!-- <?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_china";

$conn = new mysqli($servername, $username, $password, $dbname) or die ("<html><script language = 'JavaScript'>alert ('Sem conexão com o BD')
</script></html>");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta SELECT para mostrar o conteúdo da tabela
$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);

// Verifica se a consulta retornou resultados
if ($result->num_rows > 0) {
    // Loop através dos resultados e exibe os dados
    while ($row = $result->fetch_assoc()) {
        echo "nome " . $row["nome"] . "<br>";
        echo "cpf " . $row["cpf"] . "<br>";
        // Adicione mais linhas de código para exibir outras colunas, se necessário
        echo "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?> -->

<!-- como ficaria -->

<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_china";

$conn = new mysqli($servername, $username, $password, $dbname) or die ("<html><script language = 'JavaScript'>alert ('Sem conexão com o BD')
</script></html>");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>