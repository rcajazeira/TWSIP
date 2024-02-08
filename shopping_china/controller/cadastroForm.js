document.getElementById("cadastroForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const nome = document.getElementById("nome").value;
    const cpf = document.getElementById("cpf").value;

    // Envia os dados para o servidor
    fetch("cadastro_login.php", {
        method: "POST",
        body: new URLSearchParams({
            nome: nome,
            cpf: cpf
        })
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Exibe a resposta do servidor
        // Faça o que desejar com a resposta do servidor, como exibir uma mensagem de sucesso
    })
    .catch(error => {
        console.error("Erro: " + error);
    });
});











