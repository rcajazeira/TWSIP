// Obtém todos os botões com a classe "botao-redirecionar"
const botoes = document.querySelectorAll('.botao-redirecionar');

// Adiciona um ouvinte de evento de clique a cada botão
botoes.forEach(botao => {
  botao.addEventListener('click', function() {
    // Obtém o ID do produto associado ao botão
    const idProduto = this.getAttribute('data-idproduto');
    
    // Redireciona para a página de adicionar/remover com base no ID do produto
    window.location.href = `addcar.php?idproduto=${idProduto}`;
  });
});

// Obtém todos os botões com a classe "botao-remover"
const botoesRemover = document.querySelectorAll('.botao-remover');

// Adiciona um ouvinte de evento de clique a cada botão de remoção
botoesRemover.forEach(botao => {
  botao.addEventListener('click', function() {
    // Obtém o ID do produto associado ao botão de remoção
    const idProduto = this.getAttribute('data-idproduto');
    
    // Execute a lógica de remoção do produto com base no ID do produto
    // Aqui você pode usar AJAX ou qualquer outra técnica para enviar uma solicitação ao servidor para remover o produto do banco de dados
    
    // Após a remoção bem-sucedida, você pode atualizar a página ou executar qualquer outra ação necessária
  });
});