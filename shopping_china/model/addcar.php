<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Carrinho</title>
</head>
<body>
   <div id="carrinho">
      <!-- Produtos no carrinho -->
      <?php
   $conn = new mysqli("localhost", "root", "", "shopping_china");

   if ($conn->connect_error) {
       die("Erro na conexão com o banco de dados: " . $conn->connect_error);
   }

   $sql = "SELECT * FROM produto";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
           echo '<div class="produto-no-carrinho" data-idproduto="' . $row['idproduto'] . '">';
           echo '<h3>' . $row['nome'] . '</h3>';
           echo '<p>Preço: ' . $row['preco'] . '</p>';
           echo '<button class="remover-do-carrinho">Remover do Carrinho</button>';
           echo '</div>';
       }
   } else {
       echo 'Nenhum produto encontrado no carrinho.';
   }

   $conn->close();
?>
   </div> 

   <script>
// Adicionar evento de clique aos botões "Remover do Carrinho"
$(document).on('click', '.remover-do-carrinho', function() {
   var produto = $(this).closest('.produto-no-carrinho');
   var idProduto = produto.data('idproduto');
   
   // Fazer uma requisição AJAX para remover o produto do carrinho
   $.ajax({
      url: 'remover_do_carrinho.php',
      method: 'POST',
      data: { idProduto: idProduto },
      success: function(response) {
         // Verificar se a requisição foi bem-sucedida
         if (response.success) {
            // Remover o produto do carrinho da página
            produto.remove();
            console.log('Produto removido do carrinho com sucesso!');
         } else {
            console.log('Erro ao remover produto do carrinho.');
         }
      },
      error: function() {
         console.log('Erro na requisição AJAX.');
      }
   });
});
   </script>
</body>
</html>