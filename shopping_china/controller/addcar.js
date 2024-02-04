function adicionarAoCarrinho(event) {
    // Obtenha o nome e o preço do produto
    const produto = event.target.parentNode;
    const nome = produto.querySelector('h3').textContent;
    const preco = produto.querySelector('p').textContent;
  
    // Crie um objeto de produto com nome e preço
    const produtoObjeto = {
      nome: nome,
      preco: preco
    };
  
    // Adicione o produto ao carrinho (você pode usar um array ou outro objeto para armazenar os produtos do carrinho)
    // Exemplo:
    carrinhoDeCompras.push(produtoObjeto);
  
    // Atualize a exibição do carrinho
    atualizarCarrinho();
  }