// Dentro da função adicionarAoCarrinho após receber a resposta da requisição AJAX
.then(data => {
    // Atualize o HTML do carrinho com as informações do produto
    const produtoNoCarrinho = document.createElement('div');
    produtoNoCarrinho.classList.add('produto-no-carrinho');
    produtoNoCarrinho.innerHTML = `
      <h3>${data.nome}</h3>
      <p>Preço: R$ ${data.preco}</p>
      <button class="remover-do-carrinho">Remover do Carrinho</button>
    `;
    document.getElementById('carrinho').appendChild(produtoNoCarrinho);
  })