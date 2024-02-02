document.getElementById("cadastroForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    // Obtenha os valores dos campos de cadastro
    var nome = document.getElementById("nome").value;
    var cpf = document.getElementById("cpf").value;

    // Verifique se o usuário já está cadastrado (lógica de verificação aqui)
    var usuarioJaCadastrado = false; // Exemplo: definido como falso por padrão

    if (usuarioJaCadastrado) {
        alert("Usuário já cadastrado. Faça o login.");
    } else {
        alert("Cadastro realizado com sucesso!");
        // Lógica para redirecionar para a página de perfil ou outra página desejada
    }
});

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    // Obtenha os valores dos campos de login
    var nomeLogin = document.getElementById("nomeLogin").value;
    var cpfLogin = document.getElementById("cpfLogin").value;

    // Lógica para verificar se o usuário existe e fazer o login
    // (lógica de verificação aqui)

    alert("Login realizado com sucesso!");
    // Lógica para redirecionar para a página de perfil ou outra página desejada
});