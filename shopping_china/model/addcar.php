<?php
session_start();

// Função para calcular o total da compra com desconto de 15%
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
    // Aplicar desconto de 15%
    $totalComDesconto = $total * 0.85;
    return $totalComDesconto;
}

// Verificar se a solicitação é para adicionar ou remover um produto do carrinho
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idProduto'])) {
        // Adicionar o ID do produto ao carrinho
        $idProduto = $_POST['idProduto'];
        $_SESSION['carrinho'][] = $idProduto;
        // Envie uma resposta de sucesso para o JavaScript
        echo json_encode(['success' => true]);
        exit();
    } elseif (isset($_POST['removerProduto'])) {
        // Remover o produto do carrinho
        $idProdutoRemover = $_POST['removerProduto'];
        $indice = array_search($idProdutoRemover, $_SESSION['carrinho']);
        if ($indice !== false) {
            unset($_SESSION['carrinho'][$indice]);
        }
        // Redirecionar de volta para a página do carrinho
        header('Location: addcar.php');
        exit();
    }
}

// Calcular o total da compra com desconto
$totalCompraComDesconto = calcularTotalCompra();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/addcar.css">
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

   <!-- Exibir total da compra com desconto -->
   <p class="preco">Total da compra com desconto de 15%: R$ <?php echo number_format($totalCompraComDesconto, 2, ',', '.'); ?></p>

   <!-- Exibir opções de pagamento -->
   <h2>Formas de Pagamento:</h2>
   <ul class="payment-methods">
   <li><img class="icon pix" src="../view/icon/pix-106.svg" alt="Ícone Pix"> Pix</li>
   <li><img class="icon boleto" src="../view/icon/boleto.svg" alt="Ícone Boleto Bancário"> Boleto Bancário</li>
   <li><img class="icon credit-card" src="../view/icon/mastercard-18.svg" alt="Ícone Cartão de Crédito"> Cartão de Crédito</li>
   <li><img class="icon debit-card" src="../view/icon/visa-17.svg" alt="Ícone Cartão de Débito"> Cartão de Débito</li>
</ul>


   <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Contato</h3>
                <br>
                <p>Endereço: Av. Eletrônica, 123</p>
                <p>Email: contato@shoppingchina.com</p>
                <p>Telefone: (123) 456-7890</p>
            </div>
            <div class="footer-section">
                <h3>Redes Sociais</h3>
                <br>
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>

            <div class="footer-section">
                <h3>Sobre</h3>
                <br>
                <a href="#">Termos de Serviço</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">FAQ</a>
                <a href="#">AJUDA</a>
                <a href="#">TRABALHE CONOSCO</a>
            </div>
        </div>
    
        <div class="developer-info">
            <p>Desenvolvido por <span class="developer-name">Rafael Cajazeira</span></p>
            <a href="https://rcajazeira.github.io/" target="_blank">
            <img src="../view/img/desenv.jpg" alt="Logo do Desenvolvedor"></a>
        </div>
    </footer>
</body>
</html>






