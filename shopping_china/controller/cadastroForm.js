// document.getElementById("cadastroForm").addEventListener("submit", function(event) {
//     event.preventDefault(); // Impede o envio padrão do formulário

//     // Obtenha os valores dos campos de cadastro
//     var nome = document.getElementById("nome").value;
//     var cpf = document.getElementById("cpf").value;

//     // Verifique se o usuário já está cadastrado (lógica de verificação aqui)
//     var usuarioJaCadastrado = false; // Exemplo: definido como falso por padrão

//     if (usuarioJaCadastrado) {
//         alert("Usuário já cadastrado. Faça o login.");
//     } else {
//         alert("Cadastro realizado com sucesso!");
//         // Lógica para redirecionar para a página de perfil ou outra página desejada
//     }
// });

// document.getElementById("loginForm").addEventListener("submit", function(event) {
//     event.preventDefault(); // Impede o envio padrão do formulário

//     // Obtenha os valores dos campos de login
//     var nomeLogin = document.getElementById("nomeLogin").value;
//     var cpfLogin = document.getElementById("cpfLogin").value;

//     // Lógica para verificar se o usuário existe e fazer o login
//     // (lógica de verificação aqui)

//     alert("Login realizado com sucesso!");
//     // Lógica para redirecionar para a página de perfil ou outra página desejada
// });

// Aguarda o carregamento completo da página antes de executar o script
document.addEventListener("DOMContentLoaded", function() {

    // Adiciona o evento de envio ao formulário de cadastro
    document.getElementById("cadastroForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        // Obtenha os valores dos campos de cadastro
        var nome = document.getElementById("nome").value;
        var cpf = document.getElementById("cpf").value;

        // Verifica se os campos estão preenchidos
        if (nome.trim() === "" || cpf.trim() === "") {
            alert("Por favor, preencha todos os campos.");
            return; // Sai da função sem prosseguir
        }

        // Aqui você pode adicionar a lógica para verificar se o usuário já está cadastrado
        var usuarioJaCadastrado = false; // Exemplo: definido como falso por padrão

        if (usuarioJaCadastrado) {
            alert("Usuário já cadastrado. Faça o login.");
        } else {
            alert("Cadastro realizado com sucesso!");
            // Lógica para redirecionar para a página de perfil ou outra página desejada
        }
    });

    // Adiciona o evento de envio ao formulário de login
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        // Obtenha os valores dos campos de login
        var nomeLogin = document.getElementById("nomeLogin").value;
        var cpfLogin = document.getElementById("cpfLogin").value;

        // Lógica para verificar se o usuário existe e fazer o login
        // Exemplo de verificação: se o nome de login e o CPF de login correspondem a um registro no banco de dados
        if (nomeLogin === "usuariodeteste" && cpfLogin === "123456789") {
            alert("Login realizado com sucesso!");
            // Lógica para redirecionar para a página de perfil ou outra página desejada
        } else {
            alert("Usuário não encontrado. Verifique os dados e tente novamente.");
        }
    });

});

