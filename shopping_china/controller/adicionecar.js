function adicionarAoCarrinho(idProduto) {
  $.ajax({
      url: 'addcar.php',
      method: 'POST',
      data: { idProduto: idProduto },
      success: function(response) {
          console.log('Produto adicionado ao carrinho:', response);
          // Atualizar a página para exibir os produtos adicionados em tempo real
          window.location.reload();
      },
      error: function(xhr, status, error) {
          console.error('Erro ao adicionar produto ao carrinho:', error);
      }
  });
}

// Adicionar evento de clique aos botões "Adicionar ao Carrinho"
$(document).ready(function() {
  $('.adicionar-ao-carrinho').click(function() {
      var idProduto = $(this).data('idproduto');
      adicionarAoCarrinho(idProduto);
  });
});