function fazerLogin() {
    const nomeLogin = document.getElementById("nomeLogin").value;
    const cpfLogin = document.getElementById("cpfLogin").value;

    // Faça o processo de login aqui, por exemplo, verificar se as credenciais são válidas

    // Verifica se as credenciais são válidas
    if ($credenciais_validas) {
        window.location.href = "../model/shopping_china_login.php"; // Redireciona para a página "shopping_china_login2.php"
        return false; // Evita que o formulário seja enviado
    } else {
        console.log("Credenciais inválidas!");
        return false; // Evita que o formulário seja enviado
    }
}


