<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
   <div id="carrinho">
      <!-- Produtos no carrinho -->
      <?php
// Inclua o arquivo de configuração
require_once 'config.php';

// Conecte-se ao banco de dados
$conn = new mysqli("localhost", "root", "", "shopping_china");

// Verifique se houve algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para buscar os produtos no carrinho
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

// Verifique se há resultados
if ($result->num_rows > 0) {
    // Exiba os produtos no carrinho
    while ($row = $result->fetch_assoc()) {
        echo '<div class="produto-no-carrinho">';
        echo '<h3>' . $row['nome'] . '</h3>';
        echo '<p>Preço: ' . $row['preco'] . '</p>';
        echo '<button class="remover-do-carrinho">Remover do Carrinho</button>';
        echo '</div>';
    }
} else {
    echo 'Nenhum produto encontrado no carrinho.';
}

// Feche a conexão com o banco de dados
$conn->close();
?>
   </div> 

   <script>
      // Função para adicionar produto ao carrinho
function adicionarAoCarrinho(idProduto) {
   // Fazer uma requisição AJAX para buscar os dados do produto
   $.ajax({
      url: 'buscar_produto.php',
      method: 'POST',
      data: { idProduto: idProduto },
      success: function(response) {
         // Verificar se a requisição foi bem-sucedida
         if (response.success) {
            // Obter os dados do produto
            const produto = response.produto;

            // Criar o elemento HTML para o produto
            const produtoHTML = `
               <div class="produto-no-carrinho">
                  <h3>${produto.nome}</h3>
                  <p>Preço: ${produto.preco}</p>
                  <button class="remover-do-carrinho">Remover do Carrinho</button>
               </div>
            `;

            // Adicionar o produto ao carrinho
            $('#carrinho').append(produtoHTML);
         } else {
            console.log('Erro ao buscar dados do produto.');
         }
      },
      error: function() {
         console.log('Erro na requisição AJAX.');
      }
   });
}
   </script>
</body>
</html>