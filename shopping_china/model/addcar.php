<?php
session_start();

// Função para calcular o total da compra
function calcularTotalCompra() {
    $total = 0;
    foreach ($_SESSION['carrinho'] as $idProduto) {
        // Consultar o banco de dados para obter o preço do produto com base no ID
        $conn = new mysqli("localhost", "root", "", "shopping_china");

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "SELECT preco FROM produto WHERE idproduto = $idProduto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $preco = $row['preco'];
            $total += $preco;
        }

        $conn->close();
    }
    return $total;
}

// Verificar se a solicitação é para adicionar um produto ao carrinho
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idProduto'])) {
    $idProduto = $_POST['idProduto'];

    // Adicionar o ID do produto ao carrinho
    $_SESSION['carrinho'][] = $idProduto;

    // Envie uma resposta de sucesso para o JavaScript
    echo json_encode(['success' => true]);
    exit();
}

// Calcular o total da compra
$totalCompra = calcularTotalCompra();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
   <h1>Carrinho de Compras</h1>
   <!-- Exibir produtos no carrinho -->
   <div id="carrinho">
      <?php
      if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
          foreach ($_SESSION['carrinho'] as $idProduto) {
              // Consultar o banco de dados para obter os detalhes do produto com base no ID
              $conn = new mysqli("localhost", "root", "", "shopping_china");

              if ($conn->connect_error) {
                  die("Erro na conexão com o banco de dados: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM produto WHERE idproduto = $idProduto";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $nome = $row['nome'];
                  $preco = $row['preco'];

                  // Construir a exibição do produto no carrinho
                  echo '<div class="produto-no-carrinho" data-idproduto="' . $idProduto . '">';
                  echo '<h3>' . $nome . '</h3>';
                  echo '<p>Preço: R$ ' . number_format($preco, 2, ',', '.') . '</p>';
                  echo '<form method="post" action="addcar.php">';
                  echo '<input type="hidden" name="removerProduto" value="' . $idProduto . '">';
                  echo '<button type="submit">Remover</button>';
                  echo '</form>';
                  echo '</div>';
              }

              $conn->close();
          }
      } else {
          echo '<p>O carrinho está vazio.</p>';
      }
      ?>
   </div> 

   <!-- Exibir total da compra -->
   <p>Total da compra: R$ <?php echo number_format($totalCompra, 2, ',', '.'); ?></p>
</body>
</html>
