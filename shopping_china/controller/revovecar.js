function removerDoCarrinho(event) {
    // Obtenha o nome do produto a ser removido
    const produto = event.target.parentNode;
    const nome = produto.querySelector('h3').textContent;
  
    // Encontre o índice do produto no carrinho
    const indice = carrinhoDeCompras.findIndex(produto => produto.nome === nome);
  
    // Remova o produto do carrinho
    carrinhoDeCompras.splice(indice, 1);
  
    // Atualize a exibição do carrinho
    atualizarCarrinho();
  }