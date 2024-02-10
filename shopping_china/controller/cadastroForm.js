function fazerLogin() {
    const nomeLogin = document.getElementById("nomeLogin").value;
    const cpfLogin = document.getElementById("cpfLogin").value;

    // Envia os dados para o servidor
    fetch("../model/cadastro_login.php", { // Alterado o caminho para o mesmo arquivo atual
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "nomeLogin=" + encodeURIComponent(nomeLogin) + "&cpfLogin=" + encodeURIComponent(cpfLogin)
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Exibe a resposta do servidor

        // Verifica se as credenciais são válidas
        if (data === "Credenciais válidas") {
            window.location.href = "../model/shopping_china_login.php"; // Substitua "pagina_secreta.php" pela página para onde deseja redirecionar após o login
        } else {
            alert("Credenciais inválidas!"); // Exibe um alerta para o usuário
        }
    })
    .catch(error => {
        console.error("Erro: " + error);
    });

    return false; // Impede o envio do formulário para a página "shopping_china_login.php"
}


