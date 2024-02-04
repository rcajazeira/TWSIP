function atualizarCarrinho() {
    // Seletor para o elemento do carrinho
    const carrinhoElemento = document.getElementById('carrinho');
  
    // Limpe o conteúdo atual do carrinho
    carrinhoElemento.innerHTML = '';
  
    // Percorra os produtos no carrinho e adicione-os ao elemento do carrinho
    carrinhoDeCompras.forEach(produto => {
      const produtoElemento = document.createElement('div');
      produtoElemento.classList.add('produto-no-carrinho');
      produtoElemento.innerHTML = `
        <h3>${produto.nome}</h3>
        <p>${produto.preco}</p>
        <button class="remover-do-carrinho">Remover do Carrinho</button>
      `;
      carrinhoElemento.appendChild(produtoElemento);
    });
  
    // Adicione ouvintes de evento para os botões "Remover do Carrinho"
    const botoesRemoverDoCarrinho = document.querySelectorAll('.remover-do-carrinho');
    botoesRemoverDoCarrinho.forEach(botao => {
      botao.addEventListener('click', removerDoCarrinho);
    });
  }