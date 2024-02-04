<script>
  // Função para adicionar um produto ao carrinho
  function adicionarAoCarrinho(produto) {
    // Lógica para adicionar o produto ao carrinho
    // Aqui você pode usar o código necessário para adicionar o produto ao carrinho, como atualizar uma variável ou enviar uma requisição para o servidor.

    // Exemplo de código para atualizar o carrinho visualmente
    const carrinho = document.getElementById('carrinho');
    const novoProduto = document.createElement('div');
    novoProduto.innerHTML = `
      <h3>${produto.nome}</h3>
      <p>Preço: R$ ${produto.preco}</p>
      <button class="remover-do-carrinho">Remover do Carrinho</button>
    `;
    carrinho.appendChild(novoProduto);
  }

  // Event listener para o clique no botão "Adicionar ao Carrinho" do primeiro produto
  const botaoAdicionar1 = document.querySelector('.produto1 .adicionar-ao-carrinho');
  botaoAdicionar1.addEventListener('click', function() {
    const produto = {
      nome: 'Fritadeira Eletrônica Britânia S Óleo Bfr46Pi - Britania',
      preco: '1.062,10'
    };
    adicionarAoCarrinho(produto);
  });
</script>