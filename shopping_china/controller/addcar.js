// function adicionarAoCarrinho(event) {
//     // Obtenha o nome e o preço do produto
//     const produto = event.target.parentNode;
//     const nome = produto.querySelector('h3').textContent;
//     const preco = produto.querySelector('p').textContent;
  
//     // Crie um objeto de produto com nome e preço
//     const produtoObjeto = {
//       nome: nome,
//       preco: preco
//     };
  
//     // Adicione o produto ao carrinho (você pode usar um array ou outro objeto para armazenar os produtos do carrinho)
//     // Exemplo:
//     carrinhoDeCompras.push(produtoObjeto);
  
//     // Atualize a exibição do carrinho
//     atualizarCarrinho();
//   }

// Selecione todos os botões "Adicionar ao Carrinho"
const botoesAdicionar = document.querySelectorAll('.adicionar-ao-carrinho');

// Adicione um evento de clique para cada botão
botoesAdicionar.forEach(botao => {
  botao.addEventListener('click', adicionarAoCarrinho);
});

// Função para adicionar o produto ao carrinho
function adicionarAoCarrinho(event) {
  // Obtenha o ID do produto a partir do atributo data-produto-id
  const produtoId = event.target.getAttribute('data-produto-id');

  // Faça o que você precisa fazer para adicionar o produto ao carrinho
  // Por exemplo, você pode enviar uma requisição AJAX para o arquivo "addcar.php" com o ID do produto

  // Exemplo de requisição AJAX usando fetch:
  fetch('/controller/addcar.php', {
    method: 'POST',
    body: JSON.stringify({ produtoId: produtoId }),
    headers: {
      'Content-Type': 'application/json'
    }
  })
  .then(response => response.json())
  .then(data => {
    // Faça algo com a resposta da requisição, se necessário
    console.log(data);
  })
  .catch(error => {
    // Trate erros, se necessário
    console.error(error);
  });
}