<?php
// Receba o ID do produto enviado pela requisição AJAX
$produtoId = $_POST['produtoId'];

// Faça o que você precisa fazer para buscar as informações do produto no banco de dados
// Por exemplo, você pode executar uma consulta SQL para obter o nome e o preço do produto com base no ID

// Supondo que você tenha obtido o nome e o preço do produto do banco de dados
$nomeProduto = "Nome do Produto";
$precoProduto = 10.99;

// Retorne uma resposta em JSON para a requisição AJAX com as informações do produto
echo json_encode(['success' => true, 'nome' => $nomeProduto, 'preco' => $precoProduto]);
?>

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
  <div class="produto-no-carrinho">
    <h3>Nome do Produto</h3>
    <p>Preço: R$ X</p>
    <button class="remover-do-carrinho">Remover do Carrinho</button>
  </div>
</div> 
<script src="/controller/adicionarAoCarrinho.js"></script>
</body>
</html>